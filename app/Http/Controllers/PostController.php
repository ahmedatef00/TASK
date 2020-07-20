<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{

    /**
     * Display the specified Post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::findOrFail($id);
        return view('Post', compact('post'));
    }
}
