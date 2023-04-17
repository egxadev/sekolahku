<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'image', 'title', 'slug', 'content'
    ];

    // BelongsTo Model Category (memanggil Category)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // belongsToMany model Tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
