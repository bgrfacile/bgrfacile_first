<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;


    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     * @return \App\Models\User
     * @throws \Illuminate\Validation\ValidationException
     */

    public function create(array $input)
    {

        if (!Role::where('name','etudiant')->first()){
            Role::create(['name' => 'etudiant']);
        }
        if (!Role::where('name','admin')->first()){
            Role::create(['name' => 'admin']);
        }

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'condition' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'condition' => '1',
//            'telephone' => $input['email'],
            'password' => Hash::make($input['password']),
            'profile_photo_path' => "https://ui-avatars.com/api/?name={$input['name']}",
        ]);
        $countUser =  User::all()->count();
        if ($countUser === 1){
            return $user->assignRole('admin');
        }else{
            return $user->assignRole('etudiant');
        }

    }

}
