<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Http\Request;
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
            $user = $this->saveUser($input);
            return $user->assignRole('super-admin');
        } else {
            $user = $this->saveUser($input);
            return $user->assignRole('etudiant');
        }
    }

    private function saveUser(array $input)
    {
        $user = new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);
        if (request()->hasFile('image')) {
//            $user->profile_photo_path = request('image')->store('profile-photos', 'public');
            $user->profile_photo_path = $input['image']->store('profile-photos', 'public');
        }else{
            $user->profile_photo_path = "https://ui-avatars.com/api/?name={$input['name']}";
        }
        $user->save();
        return $user;
    }
}
