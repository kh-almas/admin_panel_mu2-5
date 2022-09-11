<?php

namespace App\Http\Controllers\backend;

use App\Actions\Helpers\Permission;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
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
        $this->authorize('create_task_category');
        $user->roles()->sync($request->role);
        return back()->with('role_user', 'User role is updated');
    }

//    public function check_permission(Permission $permission)
//    {
//        return session()->get('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv');
//        return $permission->check();
//    }
}
