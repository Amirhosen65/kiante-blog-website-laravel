<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialiteController extends Controller
{
    public function redirect($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider){
        $user = Socialite::driver($provider)->user();

        $old_user = User::where("email", $user->email)->first();

        if($old_user){
            Auth::login($user);
            return redirect()->route('home');
        }else{

            $getUser = User::create([
                'email'=> $user->email,
                'name'=> $user->name,
                'image'=> $user->avatar,
                'role'=> 'user',
                'email_veryfied_at'=> now(),

                'password'=> encrypt('google_password'),


            ]);
            Auth::login($getUser);
            return redirect()->route('home');
        }
    }
}
