<?php

namespace App\Http\Controllers\backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\makeUserByAdminRequest;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class makeUserByAdmin extends Controller
{
    public function __invoke(makeUserByAdminRequest $request)
    {
        $unique_id = Helper::RandomNumber(new User,'uniqueId',10,4, 'USR');
        $settings = Settings::where('id',1)->firstOrFail();

        if(!$settings->storage_limit){
            abort('ayhay Settings pai nai');
        }

        User::create([
            'name' => $request->name,
            'uniqueId' => $unique_id,
            'email' => $request->email,
            'role' => $request->role,
            'email_verified_at' => now(),
            'have_storage_library' =>$settings->storage_limit,
            'is_welcomed' => 0,
            'approve' => 1,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('viewForMakeUserByAdmin');
    }
}
