<?php

namespace App\Http\Controllers;

use App\Page;
use App\Post;
use App\Setting;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the Blog For Regualar Users.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $posts = Post::take(6)->orderBy('id', 'desc')->get();
        $settings = Setting::first();
        $pages = Page::select('id', 'feature', 'show')->get();

        return view('home', compact('posts', 'settings', 'pages'));
    }
}
