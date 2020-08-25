<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name'=> 'adminG']);
        Role::create(['name'=> 'adminE']);
        Role::create(['name'=> 'etudiant']);
        Role::create(['name'=> 'professeur']);
    }
}
