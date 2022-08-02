<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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
    return view('posts');
});

Route::get('/post/{name}', function ($name) {

    
    
    if(! file_exists($post_path = __DIR__ . "/../resources/posts/{$name}.html")){
        return redirect('/');
    }

    $post = cache()->remember("post.{$name}", now()->addSeconds(5000), fn() => file_get_contents($post_path));


    return view('post', [
        'post' => $post
    ]);
})->where('name', '[A-z_0-9/-]+');
