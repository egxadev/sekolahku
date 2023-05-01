<?php

namespace App\Http\Controllers\Landing;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show($slug)
    {
        $category = Category::select('id')->where('slug', $slug)->firstOrFail();
        $posts = Post::where('category_id', $category->id)->latest()->paginate(9);
        $tags = Tag::all();

        return view('landing.category.show', compact('posts', 'tags'));
    }
}
