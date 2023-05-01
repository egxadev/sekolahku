<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\User;
use App\Models\Photo;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $usersCount = User::count();
        $postsCount = Post::count();
        $galleriesCount = Photo::count();
        $galleriesCount += Video::count();
        $visitorCount = Post::withTotalVisitCount()->first()->visit_count_total;

        return view('admin.dashboard.index', compact('usersCount', 'postsCount', 'galleriesCount', 'visitorCount'));
    }
}
