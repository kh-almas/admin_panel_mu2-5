<?php

namespace App\Http\Middleware;

use App\Models\Settings;
use Closure;
use Illuminate\Http\Request;

class RegistrationMiddleware
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
        $settings = Settings::where('id', '1')->firstOrFail();
        if ($settings->registration == 0){
            if(request()->routeIs('register'))
            {
                return redirect()->route('login');
            }
        }
            return $next($request);


    }
}
