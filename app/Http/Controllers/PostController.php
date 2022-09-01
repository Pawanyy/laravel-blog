<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {

        return view('posts', [
            'posts' => $this->getPosts(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post)
    {
         //find the post by its slug and pass it to post view
        return view('post', [
            'post' =>  $post
        ]);
    }

    public function getPosts()
    {
        $posts = Post::latest();



        return $posts->get();
    }
}
