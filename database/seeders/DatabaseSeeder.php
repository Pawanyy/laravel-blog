<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use Faker\Provider\Lorem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = User::factory()->create([
            'name' => 'Jonny English'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

    }
}
