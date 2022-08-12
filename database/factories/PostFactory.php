<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'excerpt' => $this->faker->paragraph(5),
            'body' => '<p>'.$this->faker->paragraph(10).'</p>',
            'category_id' => Category::factory(),
            'user_id' => User::factory(),
        ];
    }
}
