<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /**
     * Redirigez l'utilisateur vers la page d'authentification GitHub.
     */
    public function github()
    {
        return Socialite::driver('github')->redirect();
    }
    /**
     * Obtenez les informations utilisateur de GitHub.
     */
    public function githubRedirect()
    {
        $user = Socialite::driver('github')->user();
        /*
         * Si utilisateur existe pas ajouter le
         * Si utilisateur exite recuper ces informations puis connecter lui
         * dans les deux cas, authentifiez l'utilisateur dans l'application et redirigez-le ensuite
         * */
        $user = User::firstOrCreate([
            'email'=>$user->getEmail()
        ],[
            'name'=>$user->getNickname(),
            'profile_photo_path'=>$user->getAvatar(),
            'password'=> Hash::make(Str::random(24)),
        ]);
        Auth::login($user,true);
        return redirect('/profil');
    }

    public function facebook(){
        return Socialite::driver('facebook')->redirect();
    }
    public function facebookRedirect(){
        $user = Socialite::driver('facebook')->user();
        dd($user);
    }


    public function google(){
        return Socialite::driver('google')->redirect();
    }
    public function googleRedirect(){
        $user = Socialite::driver('google')->user();
        $user = User::firstOrCreate([
            'email'=>$user->getEmail()
        ],[
            'name'=>$user->getNickname(),
            'profile_photo_path'=>$user->getAvatar(),
            'password'=> Hash::make(Str::random(24)),
        ]);
        Auth::login($user,true);
        return redirect('/profil');
    }

    private function saveUser($user){
        return User::firstOrCreate([
            'email'=>$user->getEmail()
        ],[
            'name'=>$user->name,
            'profile_photo_path'=>$user->picture,
            'password'=> Hash::make(Str::random(24)),
        ]);
    }
}
