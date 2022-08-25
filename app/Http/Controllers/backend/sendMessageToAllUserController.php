<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\sendMessageToAllUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sendMessageToAllUserController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = User::all();
        Mail::to($user)->send(new sendMessageToAllUser($request));
        return redirect()->route('viewSendMessageToAllUser');
    }
}
