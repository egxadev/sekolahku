<?php

namespace App\Http\Controllers\Landing;

use App\Models\Tag;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::latest()->paginate(2);
        $tags = Tag::all();

        return view('landing.photo.index', compact('photos', 'tags'));
    }
}
