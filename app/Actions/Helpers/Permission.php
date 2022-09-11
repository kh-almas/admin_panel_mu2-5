<?php

namespace App\Actions\Helpers;

use Illuminate\Support\Str;

Class Permission
{
    public static function check()
    {
        $permission = [];
        $role = auth()->user()->roles;
        foreach($role as $per)
        {
            $permi = $per->permissions;
            foreach ($permi as $szdsvfzscv)
            {
                $permission[] = $szdsvfzscv->permission;
            }
        }
        session()->put('dsjkhvnzkdxm-jvhdlidx-zhvnjx-cbxdzvczxcv', $permission);
    }
}
