<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $user= $this->roleUser($user);
        Auth::login($user,true);
        return redirect('/profil');
    }

    public function facebook(){
        return Socialite::driver('facebook')->redirect();
    }
    public function facebookRedirect(){
        $user = Socialite::driver('facebook')->user();
//        dd($user);
//        $user= $this->roleUser($user);
//        $faker = \Faker\Factory::create('fr')->unique()->safeEmail;
        $user->email =  $faker;
        Auth::login( $user,true);
        return redirect('/profil');
    }


    public function google(){
        return Socialite::driver('google')->redirect();
    }
    public function googleRedirect(){
        $user = Socialite::driver('google')->user();
        $user= $this->roleUser($user);
        Auth::login( $user,true);
        return redirect('/profil');
    }

    private function saveUser($user){
        /*
         * Si utilisateur existe pas ajouter le
         * Si utilisateur exite recuper ces informations puis connecter lui
         * dans les deux cas, authentifiez l'utilisateur dans l'application et redirigez-le ensuite
         * */
        return User::firstOrCreate([
            'email'=>$user->getEmail()
        ],[
            'name'=>$user->getName(),
            'profile_photo_path'=>$user->getAvatar(),
            'password'=> Hash::make(Str::random(24)),
        ]);
    }
    private function roleUser($user){
        $nbUser = DB::table('users')->count();
        if ($nbUser === 0) {
            $user = $this->saveUser($user);
            $user->assignRole('super-admin');
            return $user;
        } else {
            $user = $this->saveUser($user);
            $user->assignRole('etudiant');
            return $user;
        }
    }
}
