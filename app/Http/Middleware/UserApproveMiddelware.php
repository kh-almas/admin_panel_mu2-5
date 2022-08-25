<?php

namespace App\Http\Middleware;

use App\Models\Settings;
use Closure;
use Illuminate\Http\Request;

class UserApproveMiddelware
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
        if(auth()->user()->approve === 0)
        {
            return redirect()->route('approve');
        }elseif(auth()->user()->approve === 1)
        {
            return $next($request);
        }
    }
}
