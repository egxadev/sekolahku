<?php

namespace App\Models;

use Carbon\Carbon;
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

    //change default date view
    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d-M-Y')
        );
    }
}
