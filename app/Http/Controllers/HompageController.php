<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;


class HompageController extends Controller
{

    public function show_post_dash(){
        
        $userId = Auth::user()->id;
        $posts = Post::where('user_id',$userId)->get();
        // $posts=Post::all();
        return view(('dashboard'),['posts'=>$posts]);
    }
}
