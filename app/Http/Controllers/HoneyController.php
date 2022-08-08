<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anhtt as ModelsAnhtt;

class HoneyController extends Controller
{
    //
    public function homeone()
    {
        // $slide = ModelsAnhtt::where('published_at','!=',null)->take(5)->get();
        return view('homelayout.homeone',[
            // 'slide'=> $slide,
        ]);
    }
}
