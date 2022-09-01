<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category', 'author'];

    public function scopeFilter($query)
    {
        if(request('searchTerm'))
        {
            $query->where('title', 'like', '%' . request('searchTerm') . '%')
                ->orWhere('body', 'like', '%' . request('searchTerm') . '%');
        }
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
