<?php

namespace Database\Factories;

use App\Models\Categorie_book;
use Illuminate\Database\Eloquent\Factories\Factory;

class Categorie_bookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categorie_book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->text(),
        ];
    }
}
