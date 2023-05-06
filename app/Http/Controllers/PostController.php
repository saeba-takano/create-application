<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add_alcohol()
    {
        return view('posts/add_alcohol');
    }
    
    public function add_comment()
    {
        return view('posts/add_comment');
    }
    
}
  
