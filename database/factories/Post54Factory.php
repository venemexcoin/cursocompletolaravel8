<?php

namespace Database\Factories;

use App\Models\Post54;
use Illuminate\Database\Eloquent\Factories\Factory;

class Post54Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post54::class;

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
