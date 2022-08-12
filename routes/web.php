<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('/post/{post:slug}', function (Post $post) {

    //find the post by its slug and pass it to post view
    return view('post', [
        'post' =>  $post
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {

    //find the posts by its category slug and pass it to posts view
    return view('posts', [
        'posts' =>  $category->posts
    ]);
});
