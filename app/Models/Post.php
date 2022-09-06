<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when(($filters['searchTerm'] ?? false), function ($query, $searchTerm) {

            $query->where('title', 'like', "%{$searchTerm}%")
                ->orWhere('body', 'like', "%{$searchTerm}%");

        });

        $query->when(($filters['category'] ?? false), function ($query, $category) {

            $query->whereHas('category', fn($query)=>
                $query->where('slug', $category)
            );

        });
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
}
