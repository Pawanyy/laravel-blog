<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
    $posts = Post::latest()->with(['category', 'author']);

    if(request('searchTerm'))
    {
        $posts->where('title', 'like', '%' . request('searchTerm') . '%')
            ->orWhere('body', 'like', '%' . request('searchTerm') . '%');
    }
    return view('posts', [
        'posts' => $posts->get(),
        'categories' => Category::all()
    ]);
})->name('home');

Route::get('/post/{post:slug}', function (Post $post) {

    //find the post by its slug and pass it to post view
    return view('post', [
        'post' =>  $post
    ]);
})->name('post');

Route::get('/categories/{category:slug}', function (Category $category) {

    //find the posts by its category slug and pass it to posts view
    return view('posts', [
        'posts' =>  $category->posts->load(['category', 'author']),
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
})->name('category');

Route::get('/authors/{author:username}', function (User $author) {

    //find the posts by its category slug and pass it to posts view
    return view('posts', [
        'posts' =>  $author->posts->load(['category', 'author']),
        'categories' => Category::all()
    ]);
})->name('author');
