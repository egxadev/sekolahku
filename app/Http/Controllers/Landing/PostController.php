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
        $posts = Post::latest()->paginate(9);
        $tags = Tag::all();

        $visitorsCount = Post::withTotalVisitCount()->first()->visit_count_total;

        return view('landing.post.index', compact('posts', 'tags', 'visitorsCount'));
    }

    public function show($slug)
    {
        $post = Post::Where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        $events = Event::latest()->take(4)->get();
        $tags = Tag::all();

        $post->visit()->withIP()->withSession()->withUser();

        $visitorsCount = Post::withTotalVisitCount()->first()->visit_count_total;

        return view('landing.post.show', compact('post', 'categories', 'events', 'tags', 'visitorsCount'));
    }
}
