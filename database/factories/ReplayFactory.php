<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Replay;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReplayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => $this->faker->text(),
            'user_id' => User::all()->random()->id,
            'parent_id' => rand(0,10),
            'post_id' => Post::all()->random()->id,
        ];
    }
}
