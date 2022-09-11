<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class permissionController extends Controller
{
    public function permission(Request $request ,Role $role)
    {
        $role->permissions()->sync($request->permission);
        return back()->with('role_permission', 'Role permission is updated');
    }
    public function role(Request $request ,User $user)
    {
        $user->roles()->sync($request->role);
        return back()->with('role_user', 'User role is updated');
    }
}
