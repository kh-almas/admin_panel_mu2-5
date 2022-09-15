<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\Maintenance;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class settingsController extends Controller
{
    public function index()
    {
        $this->authorize('web_settings');
        return view('backend.page.settings');
    }

    public function update(Request $request)
    {
        $this->authorize('web_settings');
        // convert MB to Bytes (B) binary
        $lt = $request->store_limit;
        $limit = $lt * 1048576;

        $maintenance = $request->maintenance_link;

        if($request->maintenance === '1' && $maintenance === ''){
            $maintenance = '1630542a-246b-4b66-afa1-dd72a4c43515';
        }elseif ($request->maintenance === '0' && $maintenance)
        {
            $maintenance = '';
        }

        $settings = Settings::where('id',1)->firstOrFail();
        $st = $settings->update([
            'registration' => $request->registration,
            'maintenance' => $request->maintenance,
            'maintenance_link' => $maintenance,
            'permit_library' => $request->permit_library,
            'storage_limit' => $limit,
            'user_approve' => $request->user_approve,
            'new_user_role' => $request->new_user_role,
        ]);
        DB::table('users')->update([
            'have_storage_library' => $limit,
        ]);
        if($this->authorize('permission_for_set_maintenance_mood'))
        {
            if($request->maintenance === '1'){
                Mail::to($request->user())->send(new Maintenance($maintenance));
                Artisan::call('down --secret="'.$request->maintenance_link.'"');
            }elseif ($request->maintenance === '0'){
                Artisan::call('up');
            }
        }
        return redirect()->back();
    }
}
