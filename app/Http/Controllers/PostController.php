<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function addPost()
    {
        return view ('add-post');
    }

    public function getAllPost(post $posts)
    {
        
        $posts = post::all();
       
        return view ('post-added', compact('posts'));
    }

    public function storePost(Request $request)
    {
        $text = $request->text;
        $post = new post();
        $post->text = $text;
        $post->save();

        $posts = post::all();
       
        return view ('post-added', compact('posts'));
    }
}
