<?php

namespace App\Http\Middleware;

use App\Helpers\Helper;
use App\Models\AccessInfo;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class AccessInfoMiddelware
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
        Helper::access_info();
//        $session = session()->get('sdf43dfgh356vbnkj45vnb265j');
//        if(Auth::check())
//        {
//            $access_info = AccessInfo::where('session',$session)->first();
//
//            if(!empty($access_info))
//            {
//                $access_info->update([
//                    'user_id' => auth()->id(),
//                ]);
//            }
//        }else{
//            Helper::access_info();
//        }
        return $next($request);
    }
}
