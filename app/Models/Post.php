<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public static function find($slug)
    {
        if(! file_exists($post_path = resource_path("/posts/{$slug}.html"))){
            throw new ModelNotFoundException();
        }
    
        return cache()->remember("post.{$slug}", now()->addSeconds(5), fn() => file_get_contents($post_path));
    
    
    }
}
