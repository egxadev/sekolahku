<?php

namespace App\Http\Controllers\Landing;

use App\Models\Tag;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(2);
        $tags = Tag::all();

        return view('landing.event.index', compact('events', 'tags'));
    }

    public function show($slug)
    {
        $event = Event::Where('slug', $slug)->first();
        $events = Event::all();
        $tags = Tag::all();

        return view('landing.event.show', compact('event', 'events', 'tags'));
    }
}
