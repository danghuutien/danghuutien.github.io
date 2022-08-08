<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KetoanController extends Controller
{
    public function trangchu(){
        return view('posts.home', [

        ]);
    }

    public function tintuc(){
        return view('posts.tintuc', [

        ]);
    }

    public function dichvu(){
        return view('posts.dichvu', [

        ]);
    }

    public function nghenghiep(){
        return view('posts.nghenghiep', [

        ]);
    }

    public function gioithieu(){
        return view('posts.gioithieu', [

        ]);
    }

    public function lienhe(){
        return view('posts.lienhe', [

        ]);
    }
}
