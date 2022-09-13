<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class updateUserinfoByAdminController extends Controller
{
    public function updateGeneralInfoByAdmin(Request $request, User $user)
    {
        $this->authorize('update_user');
        $user->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'email_verified_at'=> now(),
            'approve'=> 1,
            'birthday'=> $request->birthday,
            'gender'=> $request->gender,
            'phone'=> $request->phone,
            'address'=> $request->address,
            'city'=> $request->city,
            'country'=> $request->country,
            'zip'=> $request->zip,
        ]);
        return redirect()->back();
    }

    public function logoutFromAdmin($user)
    {
        $this->authorize('user_access');
        DB::table('sessions')->where('user_id', $user)->delete();
        return redirect()->back();
    }
}
