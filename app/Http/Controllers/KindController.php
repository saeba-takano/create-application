<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kind;
use App\Models\Alcohol;

class KindController extends Controller
{
    public function kind(Kind $kind,Alcohol $alcohol)
    {
        return view("/kinds/kinds")->with(['kind'=>$kind,'kinds'=>$kind->alcohols()->get()]);
    }
}
