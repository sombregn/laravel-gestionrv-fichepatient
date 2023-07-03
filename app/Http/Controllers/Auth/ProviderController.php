<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try{
            $user = Socialite::driver($provider)->user();
            $finduser = User::where('provider_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);

                return redirect()->intended('/dashboard');
            }
            elseif(User::where('email', $user->getEmail())->exists()){
                return redirect('/login')->withErrors(['email' => 'ce compte necessite une connexion avec mot de passe']);
            }
            else{
                $user = User::updateOrCreate([
                         'provider_id' => $user->getId(),
                         'provider' => $provider
                     ], [
                         'name' => $user->getName(),
                         'username' => User::generateUserName($user->nickname),
                         'email' => $user->getEmail(),
                         'provider_token' => $user->token,
                         'email_verified_at' => now(),
                     ]);
                     $role = Role::firstOrCreate(['nom' => 'patient']);
                     $user->roles()->attach($role);

                     Auth::login($user);

                     return redirect()->intended('/dashboard');
            }
        }catch(\Exception $e){
            dd($e->getMessage());
        }

        // $SocialUser = Socialite::driver($provider)->user();
        // $user = User::updateOrCreate([
        //     'provider_id' => $SocialUser->getId(),
        //     'provider' => $provider
        // ], [
        //     'name' => $SocialUser->getName(),
        //     'username' => User::generateUserName($SocialUser->nickname),
        //     'email' => $SocialUser->getEmail(),
        //     'provider_token' => $SocialUser->token,
        //     'email_verified_at' => now(),
        // ]);

        // Auth::login($user);

        // return redirect('/dashboard');
    }
}
