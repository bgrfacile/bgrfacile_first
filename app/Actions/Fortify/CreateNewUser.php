<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Spatie\Permission\Models\Role;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'image' => ['image', 'max:5000'],
            'password' => $this->passwordRules(),
        ])->validate();


        $nbUser = DB::table('users')->count();
        if ($nbUser === 0) {
            $user = User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'profile_photo_path' => request('image')->store('profile-photos', 'public'),
                'password' => Hash::make($input['password']),
            ]);
            return $user->assignRole('super-admin');
        } else {
            $path = request('image')->store('profile-photos', 'public');
            $user = User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'profile_photo_path' => $path,
                'password' => Hash::make($input['password']),
            ]);
            return $user->assignRole('etudiant');
        }


    }
}
