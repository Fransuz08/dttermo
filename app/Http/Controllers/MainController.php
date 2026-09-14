<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View
    {
        $news = News::query()
            ->where('status', Status::STATUSES['active'])
            ->orderBy('order', 'desc')
            ->take(3)
            ->get();
        return view('pages.index', compact('news'));
    }

    public function aboutUs(): View
    {
        return view('pages.about');
    }

    public function catalog(): View
    {
        return view('pages.catalog');
    }

    public function contacts(): View
    {
        return view('pages.contacts');
    }
}
