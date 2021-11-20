<?php

namespace Database\Factories;

use App\Models\Blog;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

// $factory->define(Blog::class, function(Faker $faker) {
//     return [
//         'title' => $this->$faker->word,
//         'content' => $this->$faker->realText
//     ];
// });



class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'content' => $this->faker->realText
        ];
    }
}