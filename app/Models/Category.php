<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //mass assignment all field
    protected $fillable = [
        'name', 'slug'
    ];

    public function post()
    {
        // Relasi One to Many Category dengan Post
        return $this->hasMany(Post::class);
    }
}
