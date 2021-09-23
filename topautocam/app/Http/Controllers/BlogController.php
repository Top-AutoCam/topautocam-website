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
        $posts = Post::orderBy('updated_at', 'desc')->latest()->get();
        foreach($posts as $post){
            $this->contents = json_decode($post->post_content);
            foreach($this->contents as $content){
                $this->images = $content->attributes;
            }
        }

        return view('front.pages.blog.index', [
            'posts' => $posts,
            'images' => $this->images,
        ]);
    }

    public function detail($slug) {
        $post = Post::where('slug', $slug)->first();
        if($post == null) {
            abort(404);
        }
        $content = json_decode($post->post_content);
        foreach($content as $content){
            $images = $content->attributes;
        }
        return view('front.pages.blog.post', [
            'post' => $post,
            'images' => $images,
        ]);
    }

}
