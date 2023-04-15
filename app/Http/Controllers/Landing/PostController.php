<?php

namespace App\Http\Controllers\Landing;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(2);
        $tags = Tag::all();

        return view('landing.post.index', compact('posts', 'tags'));
    }

    public function show($slug)
    {
        $post = Post::Where('slug', $slug)->first();
        $categories = Category::all();
        $events = Event::all();
        $tags = Tag::all();

        return view('landing.post.show', compact('post', 'categories', 'events', 'tags'));
    }
}
