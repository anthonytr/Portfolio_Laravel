<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        //Creo una variable posts y le digo que me traiga todos los posts:
        $posts = Post::get();

        return view('blog', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('post', compact('post'));
    }
}
