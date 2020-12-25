<?php

namespace Database\Factories;

use App\Models\Post2;
use Illuminate\Database\Eloquent\Factories\Factory;

class Post2Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post2::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'body'  => $this->faker->text,
        ];
    }
}
