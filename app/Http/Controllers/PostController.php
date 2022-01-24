<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $req){
        
        $post = new post;

        $post -> user_id = Auth::user()->id;
        $post -> name = Auth::user()->name;

        $post -> post = $req -> thoughts;
        $post -> save();

        return redirect()->route('home');
    }
}
