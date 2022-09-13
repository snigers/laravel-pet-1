<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $post = Post::find(1);
//        $post = Post::all();

        dump($post->title);
        dump($post);
//        return "page Test";
    }
}
