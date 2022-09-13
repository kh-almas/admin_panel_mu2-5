<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class viewForUserFromAdmin extends Controller
{
    public function index()
    {
        $this->authorize('user_access');
        return view('backend.page.manage.user.index');
    }

    public function createUser()
    {
        $this->authorize('make_new_user');
        return view('backend.page.manage.user.createUser');
    }

    public function viewUpdateUserForm(User $user)
    {
        $this->authorize('update_user');
        return view('backend.page.manage.user.update',compact('user'));
    }

    public function sendMessageToSingleUser(User $user)
    {
        $this->authorize('user_access');
        return view('backend.page.manage.user.singleUserMessage',compact('user'));
    }

    public function sendMessageToGroupUser()
    {
        $this->authorize('user_access');
        return view('backend.page.manage.user.groupeUserMessage');
    }

    public function sendMessageToAllUser()
    {
        $this->authorize('user_access');
        return view('backend.page.manage.user.AllUserMessage');
    }
}
