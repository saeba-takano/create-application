<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kind;
use App\Models\Country;
use App\Models\Alcohol;
use App\Models\Post;

class AlcoholController extends Controller
{
    public function alcohol(Alcohol $alcohol,Post $post)
    {
        return view('/alcohols/alcohol')->with(['alcohol'=>$alcohol,'alcohols'=>$alcohol->posts()->get()]);
    }
    
    
    public function add_alcohol(Kind $kind, Country $country)
    {
        return view('posts/add_alcohol')->with(['kinds'=>$kind->get()])->with(['countries'=>$country->get()]);
    }
    
    public function store(Request $request, Alcohol $alcohol)
    {
        $input=$request['post'];
        $alcohol->fill($input)->save();
        return redirect('posts/add_comment');
    }
        
}
