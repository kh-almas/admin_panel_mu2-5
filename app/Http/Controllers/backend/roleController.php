<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\role;
use Illuminate\Http\Request;

class roleController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return view('backend.page.role',compact('role'));
    }

    public function store(Request $request)
    {
        $assign_role = Role::create([
            'role' => $request->role,
        ]);
        return redirect()->back()->with('create_message', $request->role);
    }

    public function update(Request $request,$id)
    {
        $role = role::findorfail($id);
        //return $role;
        $role->update([
            'role' => $request->role,
        ]);
        return redirect()->back()->with('update_message', $request->role);
    }

    public function destroy($id)
    {
        $role = role::destroy($id);
        //$role->delete();
        return redirect()->back()->with('delete_message', 'Role Deleted');
    }
}
