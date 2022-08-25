<?php

namespace App\Http\Middleware;

use App\Helpers\Helper;
use App\Models\Settings;
use Closure;
use Illuminate\Http\Request;

class MaintenanceMiddleware
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
//        Helper::maintenance();
//        $settings = Settings::where('id',1)->firstOrFail();
//        if($settings->maintenance === 1){
//            if (auth()->check() && auth()->user()->email === 'almaskh38@gmail.com'){
//                return $next($request);
//            }
//            return redirect(route('maintenance'));
//        }else{
            return $next($request);
//        }
    }
}
