<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class socialController extends Controller
{
    protected function _registerOrLogin($data)
    {
        //return $data;
        $user= User::where('email', '=', $data->email)->first();
        //dd($data);
        if(!$user){
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
            //$user->profile_photo_path = $data->avater;
            $user->save();
        }
        Auth::login($user);
    }

    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        // $user->token
        //dd($user);
        $this->_registerOrLogin($user);
        return redirect()->route('home');
    }



    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        dd($user);
        // $user->token
        $this->_registerOrLogin($user);
        return redirect()->route('home');
    }



    public function githubRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubCallback()
    {
        $user = Socialite::driver('github')->user();

        dd($user);
        // $user->token
        $this->_registerOrLogin($user);
        return redirect()->route('home');
    }
}
