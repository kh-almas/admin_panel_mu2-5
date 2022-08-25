<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class viewForUserFromAdmin extends Controller
{
    public function index()
    {
        return view('backend.page.manage.user.index');
    }

    public function createUser()
    {
        return view('backend.page.manage.user.createUser');
    }

    public function viewUpdateUserForm(User $user)
    {
        return view('backend.page.manage.user.update',compact('user'));
    }

    public function sendMessageToSingleUser(User $user)
    {
        return view('backend.page.manage.user.singleUserMessage',compact('user'));
    }

    public function sendMessageToGroupUser()
    {
        return view('backend.page.manage.user.groupeUserMessage');
    }

    public function sendMessageToAllUser()
    {
        return view('backend.page.manage.user.AllUserMessage');
    }
}
