<?php

namespace App\Http\Controllers\Landing;

use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->paginate(2);
        $tags = Tag::all();

        return view('landing.video.index', compact('videos', 'tags'));
    }
}
