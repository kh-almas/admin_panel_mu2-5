<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\sendMessageToSingleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sendMessageToSingleUserController extends Controller
{
    public function __invoke(User $user,Request $request)
    {
        $this->authorize('user_access');
        Mail::to($user->email)->send(new sendMessageToSingleUser($request));
        return redirect()->route('viewSendMessageToAllUser');
    }
}
