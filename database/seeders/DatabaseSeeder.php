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
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name'=>'Personal',
            'slug'=>'personal',
        ]);
        $work = Category::create([
            'name'=>'Work',
            'slug'=>'work',
        ]);
        $hobby = Category::create([
            'name'=>'Hobby',
            'slug'=>'hobby',
        ]);

        $post_excerpt_size = 5;
        $post_body_size = 10;

        Post::create([
            'title'=>'Post 1',
            'slug'=>'post-1',
            'category_id'=>$personal->id,
            'user_id'=>$user->id,
            'excerpt'=>Lorem::paragraph($post_excerpt_size),
            'body'=> '<p>'.Lorem::paragraph($post_body_size).'</p>' ,
        ]);
        Post::create([
            'title'=>'Post 2',
            'slug'=>'post-2',
            'category_id'=>$work->id,
            'user_id'=>$user->id,
            'excerpt'=>Lorem::paragraph($post_excerpt_size),
            'body'=> '<p>'.Lorem::paragraph($post_body_size).'</p>' ,
        ]);
        Post::create([
            'title'=>'Post 3',
            'slug'=>'post-3',
            'category_id'=>$hobby->id,
            'user_id'=>$user->id,
            'excerpt'=>Lorem::paragraph($post_excerpt_size),
            'body'=> '<p>'.Lorem::paragraph($post_body_size).'</p>' ,
        ]);

    }
}
