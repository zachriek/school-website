<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Major;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        $news = News::latest()->get();

        return view('pages.base.home', [
            'blogs' => $blogs,
            'news' => $news,
        ]);
    }
}
