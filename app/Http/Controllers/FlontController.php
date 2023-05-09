<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kind;
use App\Models\Country;

class FlontController extends Controller
{
    public function flont(Kind $kind,Country $country){
        return view('flont/flont')->with(['kinds'=>$kind->get()])->with(['countries'=>$country->get()]);
    }
}
