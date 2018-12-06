<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchPosts(Request $request)
    {
        $request->validate([
            'q' => 'required',
        ]);
        
        $query = request('q');

        $posts = \App\Post::where('title', 'LIKE', '%'.$query.'%')->paginate(10);

        return view('posts.index', compact('posts'));
    }
}
