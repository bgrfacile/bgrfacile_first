<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminG = User::create([
            'name'=>'adminG',
            'email'=>'adminG@admin.com',
            'password'=> Hash::make('password')
        ]);

        $adminE = User::create([
            'name'=>'adminE',
            'email'=>'admin1@admin.com',
            'password'=> Hash::make('password')
        ]);

        $etudiants = User::create([
            'name'=>'etudiant',
            'email'=>'admin2@admin.com',
            'password'=> Hash::make('password')
        ]);
        $professeur = User::create([
            'name'=>'professeur',
            'email'=>'admin3@admin.com',
            'password'=> Hash::make('password')
        ]);



        $adminGRole = Role::where('name','adminG')->first();
        $adminERole = Role::where('name','adminE')->first();
        $etudiantsRole = Role::where('name','etudiant')->first();
        $professeurRole = Role::where('name','professeur')->first();

        $adminG->roles()->attach($adminGRole);
        $adminE->roles()->attach($adminERole);
        $etudiants->roles()->attach($etudiantsRole);
        $professeur->roles()->attach($professeurRole);
    }
}
