<?php

namespace App\Http\Controllers;

use App\Models\Anhtt as ModelsAnhtt;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Danhmuccon;
use App\Models\Post;
use App\Models\Anhtt;
use App\Models\danhmuc;
use App\Models\Document;
use App\Models\Sanpham;
use App\Models\thuvienanh;
use App\Nova\BaiViet;
use Illuminate\Support\Facades\DB;

class KyanhController extends Controller
{
    //
 
    public function trangchu()
    {       
        $slider = Sanpham::all();
        // return $slider;
        $banner = Sanpham::where('category_id','=' ,17)->orderBy('id', 'desc')->take(3)->get();
        $baiviet_1 = Sanpham::where('category_id','=' ,17)->orderBy('id', 'desc')->take(8)->get();
        $baiviet_2 = Sanpham::where('category_id','=' ,17)->orderBy('id', 'desc')->take(4)->get();
        $baiviet_3 = Sanpham::where('category_id','=' ,18)->orderBy('id', 'desc')->take(4)->get();
        return view('posts.home', [
            'baiviet_1' => $baiviet_1,
            'baiviet_2' => $baiviet_2,
            'baiviet_3' => $baiviet_3,
            'banner' => $banner,
            'slider' => $slider,
            
        ]);
    }


    public function sanpham($slug)
    {
        // return 1;
        $danhmuc = Category::where('slug' , $slug)->first();
        $sanpham = Sanpham::where('category_id','=' ,$danhmuc->id)->orderBy('id', 'desc')->take(4)->get();
        // return $danhmuc;
        return view('posts.sanpham', [
            'sanpham' => $sanpham,
            'danhmuc' => $danhmuc
        ]);
    }

    public function gioithieu()
    {

        
        $banner = Post::where('category_id','=' , 20)->orderBy('id', 'desc')->take(4)->get();
        $gioithieubottom = Post::where('category_id','=' , 20)->orderBy('id', 'desc')->take(12)->get();
        // return $gioithieubottom;
        return view('posts.gioithieu', [
            'banner' => $banner,
            'gioithieubottom' => $gioithieubottom,
        ]);
    }
    public function lienhe()
    {

        return view('posts.lienhe', [

        ]);
    }

    public function taikhoan()
    {

        return view('posts.taikhoan', [

        ]);
    }

    public function chitietsanpham($slug)
    {
        $xemchitiet = Sanpham::where('slug' , $slug)->first();
        // return $xemchitiet;
        return view('posts.chitietsanpham', [
            'xemchitiet' => $xemchitiet,
        ]);
    }
   

   
}
