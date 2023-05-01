<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Concerns\HasVisits;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model implements CanVisit
{
    use HasFactory, HasVisits;

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
