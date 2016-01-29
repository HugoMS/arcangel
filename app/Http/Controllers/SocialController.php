<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 20/01/16
 * Time: 10:42 AM
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use Illuminate\Support\Facades\Auth;



class SocialController extends Controller
{

    public function getSocialAuth($provider = null)
    {

        if (!config("services.$provider")) abort('404');
        return Socialite::driver($provider)->redirect();
    }

    public function getSocialAuthCallback($provider = null)
    {
        if ($user = Socialite::driver($provider)->user()){
            if ($the_user = User::select()->where('email', '=', $user->email)->first())
            {
                Auth::login($the_user);
            }	else{
                $new_user = new User;
                $new_user->name = $user->name;
                $new_user->email = $user->email;
                $new_user->avatar = $user->avatar;
                $new_user->save();
                Auth::login($new_user);

//                //Registrar Información extra
//                $social = new Social;
//                $social->user_id = $new_user->id;
//                $social->provider = $provider;
//                $social->uid_provider = $user->id;
//                $social->save();
            }
            return redirect('home');
        }else{
            return '¡¡¡Algo fue mal!!!';
        }
    }


}