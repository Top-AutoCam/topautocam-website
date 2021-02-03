<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OptimistDigital\NovaBlog\Models\Post;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::orderBy('updated_at', 'desc')->get();
        return view('front.pages.blog', [
            'posts' => $posts
        ]);
    }

    public function detail($slug) {
        //$post = Post::where('slug', $slug)->first();
        $posts = Post::orderBy('updated_at', 'desc')->get();
        return view('front.pages.blog', [
            'posts' => $posts
        ]);
    }
}
