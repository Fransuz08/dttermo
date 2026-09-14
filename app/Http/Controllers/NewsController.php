<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function getAllNews(): View
    {
        $news = News::query()
            ->where('status', Status::STATUSES['active'])
            ->orderBy('order', 'desc')
            ->get();
        return view('pages.news', compact('news'));
    }

    public function getOneNews(News $news): View
    {
        $otherNews = News::query()
            ->whereNot('id', $news->id)
            ->where('status', Status::STATUSES['active'])
            ->orderBy('order', 'desc')
            ->take(3)
            ->get();
        return view('pages.one_news', compact('news', 'otherNews'));
    }

}
