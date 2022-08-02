<?php

use App\Models\Post;
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

    //find the post by its slug and pass it to post view
    
    $post = Post::find($name);
    
    return view('post', [
        'post' => $post
    ]);
})->where('name', '[A-z_0-9/-]+');
