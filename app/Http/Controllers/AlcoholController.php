<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alcohol;

class AlcoholController extends Controller
{
    public function index(Alcohol $alcohol)
    {
        $id=1;
        dd($alcohol->first()->country);
     return $alcohol->get();   
    }
        
}
