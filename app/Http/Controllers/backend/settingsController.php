<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class settingsController extends Controller
{
    public function index()
    {
        //$settings = Settings::where('id',1)->firstOrFail();
        //dd($settings);
        return view('backend.page.settings');
    }

    public function update(Request $request)
    {
        //dd($request);
        // convert MB to Bytes (B) binary
        $lt = $request->store_limit;
        $limit = $lt * 1048576;

        if($request->maintenance === '1' && $request->maintenance_link === ''){
            $request->maintenance_link = '1630542a-246b-4b66-afa1-dd72a4c43515';
        }elseif ($request->maintenance === '0' && $request->maintenance_link)
        {
            $request->maintenance_link = '';
        }

        $settings = Settings::where('id',1)->firstOrFail();
        $st = $settings->update([
            'registration' => $request->registration,
            'maintenance' => $request->maintenance,
            'maintenance_link' => $request->maintenance_link,
            'permit_library' => $request->permit_library,
            'storage_limit' => $limit,
            'user_approve' => $request->user_approve,
            'new_user_role' => $request->new_user_role,
        ]);
        DB::table('users')->update([
            'have_storage_library' => $limit,
        ]);
        if($request->maintenance === '1'){
            Artisan::call('down --secret="'.$request->maintenance_link.'"');
        }elseif ($request->maintenance === '0'){
            Artisan::call('up');
        }
        return redirect()->back();
    }
}
