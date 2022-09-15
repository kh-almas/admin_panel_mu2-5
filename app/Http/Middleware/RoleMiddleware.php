<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check())
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
        return $next($request);
    }
}
