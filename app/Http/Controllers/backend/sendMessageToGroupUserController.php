<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\sendMessageToAllUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sendMessageToGroupUserController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = User::where('role',$request->group)->get();
        Mail::to($user)->send(new sendMessageToAllUser($request));
        return redirect()->route('viewSendMessageToGroupUser');
    }
}
