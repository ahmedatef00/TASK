<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function getPage($feature)
    {
        $page = Page::where('feature', $feature)->first();
        return view('Custom', compact('page'));
    }
}
