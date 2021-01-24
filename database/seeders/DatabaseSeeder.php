<?php

namespace Database\Seeders;

use App\Models\Categorie_book;
use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
//         Categorie_book::factory(10)->create();
        Course::factory(100)->create();
    }
}
