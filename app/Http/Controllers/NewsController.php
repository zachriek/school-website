<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show(News $news)
    {
        return view('pages.base.news.show', [
            'news' => $news
        ]);
    }
}
