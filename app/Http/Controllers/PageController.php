<?php

namespace App\Http\Controllers;

use App\Page;
use App\Setting;

class PageController extends Controller
{
    public function getPage($feature)
    {
        $page = Page::where('feature', $feature)->first();
        $settings = Setting::first();
        $pages = Page::select('id', 'feature', 'show')->get();

        return view('Custom', compact('pages', 'page', 'settings'));
    }
}
