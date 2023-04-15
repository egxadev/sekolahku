<?php

namespace App\Http\Controllers\Landing;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return view('landing.contact.index', compact('tags'));
    }
}
