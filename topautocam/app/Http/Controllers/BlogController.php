<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OptimistDigital\NovaBlog\Models\Post;
use App\Models\Announcement;
use App\Models\Car;
use App\Models\Motorbike;
use App\Models\Part;
use App\Util\UTIL;
use DB;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::orderBy('updated_at', 'desc')->get();
        return view('front.pages.blog.index', [
            'posts' => $posts
        ]);
    }

    public function detail($slug) {
        $post = Post::where('slug', $slug)->first();
        if($post == null) {
            abort(404);
        }
        $content = json_decode($post->post_content);
        return view('front.pages.blog.post', [
            'post' => $post,
            'content' => $content
        ]);
    }

}
