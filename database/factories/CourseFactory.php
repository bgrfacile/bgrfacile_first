<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'user_id' => 1,
            'subject_id' => 1,
            'description' => $this->faker->sentence(),
            'contenue' => $this->faker->randomHtml(),
            'image_path' => $this->faker->imageUrl($width = 200, $height = 200),
        ];
    }
}
