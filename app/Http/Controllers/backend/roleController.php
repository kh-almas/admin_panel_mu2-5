<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class roleController extends Controller
{
    public function index()
    {
        $roles = Role::latest()->paginate('5');
        $permissions = Permission::all();
        return view('backend.page.role',compact('roles', 'permissions'));
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
        $role = Role::findorfail($id);
        //return $role;
        $role->update([
            'role' => $request->role,
        ]);
        return redirect()->back()->with('update_message', $request->role);
    }

    public function destroy($id)
    {
        $role = Role::destroy($id);
        //$role->delete();
        return redirect()->back()->with('delete_message', 'Role Deleted');
    }
}
