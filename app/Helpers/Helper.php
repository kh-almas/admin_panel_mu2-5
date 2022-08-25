<?php


namespace App\Helpers;

use App\Models\AccessInfo;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Support\Str;
use Jenssegers\Agent\Agent;

class Helper
{
    //id = Helper::IDGenerator(new User, 'user_id', 25, 'USR'); //reselt - USR-00001
    public static function IDGenerator($model, $trow, $length, $prefix)
    {
        $data = $model::orderBy('id','desc')->first();
        if(!$data){
            $og_length = $length;
            $last_number = '';
        }else{
            $code = substr($data->$trow, strlen($prefix)+1);
            $actial_last_number = ($code/1)*1;
            $increment_last_number = ((int)$actial_last_number)+1;
            $last_number_length = strlen($increment_last_number);
            $og_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }
        $zeros = "";
        for($i=0;$i<$og_length;$i++){
            $zeros.="0";
        }
        return $prefix.'-'.$zeros.$last_number;
    }



    //id = Helper::RandomNumber(new User, unique_id, 10, 4, 'USR');
    public static function RandomNumber($model, $column_name, $length , $repeat, $prefix)
    {
        $x = 0;
        $unique_id =$prefix.'--'.str::random($length);
        do{
            do {
                $x++;
                $unique_id .= '-'.str::random($length);
            } while ($x < $repeat-1);
        }while(empty($model::where($column_name, $unique_id)->get()));
        return $unique_id;
    }



    //$prefix = 'IMG'.'-'.Carbon::now()->toDateString().'-'.time();
    //$suffix = $request->newImage->getClientOriginalExtension();
    //$name = Helper::file_name(new User,'uniqueId',10,4, $prefix, $suffix);
    public static function file_name($model, $column_name, $length , $repeat, $prefix , $suffix)
    {
        $x = 0;
        $unique_id =$prefix.'--'.str::random($length);
        do{
            do {
                $x++;
                $unique_id .= '-'.str::random($length);
                if($x == $repeat-1){
                    $unique_id .= '.'.$suffix;
                }
            } while ($x < $repeat-1);
        }while(empty($model::where($column_name, $unique_id)->get()));
        return $unique_id;
    }

    public static function calculate_space($size, $calculator)
    {
        //$size = $size/1024;
        $used_storage_library = (int)auth()->user()->used_storage_library;
        $have_storage_library = (int)auth()->user()->have_storage_library;
        $settings_storage_space = Settings::where('id',1)->first('storage_limit');


        if($calculator == 'plus')
        {
            $used_storage_library += $size;
            $have_storage_library -= $size;
        }


        if($calculator == 'subtraction')
        {
            $used_storage_library -= $size;
            $have_storage_library += $size;
        }

        if($used_storage_library > $settings_storage_space->storage_limit){
            abort('403');
        }

        auth()->user()->forceFill([
            'used_storage_library' => $used_storage_library,
            'have_storage_library' => $have_storage_library,
        ])->save();

    }

    public static function access_info()
    {
        $agent = new Agent();
        $access_info = AccessInfo::where('session',session()->get('sdf43dfgh356vbnkj45vnb265j'))->first();



        if (!$access_info){
            $session = Helper::file_name(new AccessInfo,'session',25,4, 'ses', str::random(25));
            session()->put('sdf43dfgh356vbnkj45vnb265j', $session);

            $ip = request()->ip();
            $user_agent =  $_SERVER['HTTP_USER_AGENT'];
            $username = getenv("username");
            $language = implode(',',$agent->languages());
            $device = $agent->device();
            $platform = $agent->platform();
            $platform_version = $agent->version($platform);
            $browser = $agent->browser();
            $browser_version = $agent->version($browser);
            $robot = $agent->robot();




            $access_info = new AccessInfo();
            $access_info->session = $session;
            $access_info->device_name = $username;
            $access_info->ip = $ip;
            $access_info->language = $language;
            $access_info->device = $device;
            $access_info->platform = $platform;
            $access_info->platform_version = $platform_version;
            $access_info->browser = $browser;
            $access_info->browser_version = $browser_version;
            $access_info->robot = $robot;
            $access_info->user_agent = $user_agent;

            $access_info->save();
        }

        if (auth()->check())
        {
            $access_info->update([
                $access_info->user_id = auth()->id(),
            ]);
        }

    }

}
