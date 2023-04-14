<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $tags = Tag::all();
        $sliders = Slider::all();
        $photos = Photo::latest()->take(2)->get();
        $videos = Video::latest()->take(2)->get();
        $events = Event::all();
        $categories = Category::all();

        return view('landing.home.index', compact('posts', 'tags', 'sliders', 'photos', 'videos', 'events', 'categories'));
    }
}
