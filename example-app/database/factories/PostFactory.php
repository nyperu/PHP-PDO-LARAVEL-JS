<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
         */

    public function definition()
    {
        return [
            'user_id'=>User::Factory(),
            'category_id'=>category::factory(),
            'title'=>$this->faker->sentence,
            'slug'=>$this->faker->slug,
            'excerpt'=>$this->faker->sentence,
            'body'=>$this->faker->paragraph,

        ];
    }
}
