<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show(Blog $blog)
    {
        return view('pages.base.blogs.show', [
            'blog' => $blog
        ]);
    }
}
