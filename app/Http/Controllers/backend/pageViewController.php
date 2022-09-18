<?php

namespace App\Http\Controllers\backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\AccessInfo;
use App\Models\Settings;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class pageViewController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function index()
    {
        $dates = collect();
        foreach( range( -29, 0 ) AS $i ) {
            $date = Carbon::now()->addDays( $i )->format( 'Y-m-d' );
            $dates->put( $date, 0);
        }

        // Get the user counts
        $info = User::where( 'created_at', '>=', $dates->keys()->first() )
            ->groupBy( 'date' )
            ->orderBy( 'date' )
            ->get( [
                DB::raw( 'DATE( created_at ) as date' ),
                DB::raw( 'COUNT( * ) as "count"' )
            ] )
            ->pluck( 'count', 'date' );

        // Merge the two collections; any results in `$info` will overwrite the zero-value in `$dates`
        $dates = $dates->merge( $info );
        $labels = '';
        $series = '';
        foreach($dates as $date => $count){
            $gcn = DateTime::createFromFormat('Y-m-d', $date)->format('d');
            $labels .= "'$gcn'".', ';
        }
        foreach ( $dates as $date => $count ) {
            $series .= "'$count'".', ';
        }
        return view('backend.page.index',compact('labels','series'));
    }


    public function profile(){
        return view('backend.page.profile-settings');
    }

    public function session(Request $request){
        Auth::logoutOtherDevices($request->password);
        return redirect()->back();
    }



    public function is_approve()
    {
        Auth::logout();
        return view('auth.approve_alert');
    }


}
