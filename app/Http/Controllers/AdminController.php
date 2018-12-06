<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function posts()
    {
        $posts = App\Post::all();

        return view('admin.posts', compact('posts'));
    }

    public function comments()
    {
        $comments = App\Comment::all();

        return view('admin.comments', compact('comments'));
    }
}
