<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Danhmuccon;
use App\Models\Post;
use App\Models\Anhtt;
use App\Models\Sanpham;
use App\Models\DB;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $cats = Category::where('parent_id','=', null)->get();
        $gioithieu = danhmuccon::all();
        $demdmc = count($gioithieu);
        $anhtt = Anhtt::orderBy('id','desc')->take(10)->get();
        $danhmuc = getDanhmuc(null);
        View::share('danhmuc',  $danhmuc);
        View::share('gioithieu',  $gioithieu);
        View::share('demdmc',  $demdmc);
        View::share('anhtt', $anhtt);
        View::share('cats', $cats);
        
        $tintuc = Sanpham::where('category_id','=' , 18)->orderBy('id', 'desc')->take(4)->get();
        
        View::share('tintuc',  $tintuc);
        View::share('chitietsanpham',  $tintuc);

        
    }
}
