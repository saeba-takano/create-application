<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kind;
use App\Models\Country;
use App\Models\Alcohol;
use App\Models\Post;

class PostController extends Controller
{
    
    public function add_comment(Alcohol $alcohol)
    {
        return view('posts/add_comment')->with(['alcohols'=>$alcohol->get()]);
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/'. $post->id);
    }
    
    public function show(Post $post,Alcohol $alcohol)
    {
        return view('posts/show')->with(['post' => $post])->with(['alcohol'=>$alcohol]);
    }
    
    
}
  
