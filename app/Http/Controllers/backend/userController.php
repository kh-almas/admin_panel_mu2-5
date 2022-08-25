<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\OrderShipped;
use App\Mail\singleUserMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class userController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);
        return view('backend.page.manage.user.index',compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        return view('backend.page.manage.user.update',compact('user'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function logoutFromAdmin($user)
    {
        DB::table('sessions')->where('user_id', $user)->delete();
        return redirect()->back();
    }

    public function singleUserMessage(User $user)
    {
        //return $user;
        return view('backend.page.manage.user.singleUserMessage',compact('user'));
    }

    public function checkmail(User $user,Request $request)
    {

        Mail::to($user->email)->send(new OrderShipped($request));
        return new OrderShipped($request);
        //return view('backend.page.manage.user.singleUserMessage',compact('user'));
    }

    public function backup()
    {

    }
}
