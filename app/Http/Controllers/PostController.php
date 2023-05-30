<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        $highlight = Post::orderBy('rating', 'DESC')->first();
        $news = Post::latest()->take(4)->get();
        return view('home', compact("posts", "highlight", "news"));
    }

    public function show($id){
        $posts = Post::find($id);
        return view('detail', compact("posts"));
    }
}
