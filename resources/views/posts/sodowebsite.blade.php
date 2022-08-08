@extends('layout.trangchu')
@section('content')
<h3 class="text-3xl font-bold ">Sơ đồ website</h3>
<hr style="width:200px; height:2px ; background:rgba(185,28,28,var(--tw-bg-opacity))">

        <div class="ml-5 mt-3">
            <label for=""> Tên </label>
            <select name="parent_id" >
                <option value="0"></option>
                @foreach( $cats as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}
                @include('posts.menu_child', ['cat' => $cat])
                </option>
                    
                @endforeach
            </select>
        </div>

        <div class="topnav" id="myTopnav">
            <div class=" banner-color mx-auto">
                <nav class="navbar sticky top-0" role="navigation" aria-label="main navigation">
                    <div class="navbar-brand justify-between sm:ml-12">

                            <!-- <div class="grid grid-cols-12">
                                <div class="col-span-2">             -->
                                    <div class="sm:mx-auto w-max sm:w-auto my-auto logo-img">
                                        <a href="/"> <img src="/images/anhduong-remove.png" class="w-full"  alt="">
                                        </a>
                                    </div>
                                <!-- </div> -->
                                <!-- <div class="col-span-3"> -->
                                    <span style="color: #003574;" class="sm:pt-2 sm:ml-2 my-auto text-xs text-center font-bold">CÔNG TY TNHH TM & CN <br> LED ÁNH DƯƠNG</span>
                                <!-- </div> -->
                                <!-- <div class="col-span-7"> -->
                                    <a role="button" href="javascript:void(0);" class="navbar-burger" aria-label="menu" aria-expanded="false"
                                        data-target="navbarMobile"  onclick="myFunction()">
                                        <span aria-hidden="true"></span>
                                        <span aria-hidden="true"></span>
                                        <span aria-hidden="true"></span>
                                    </a>
                                <!-- </div> -->
                            <!-- </div> -->
                    </div>

                    <div id="navbarMobile" class="navbar-menu sm:hidden block " >
                        <div class="navbar-start sticky top-0  h-screen sm:h-auto sm:ml-36">
                            
                        <a class="navbar-item font-bold text-sm" href="/" style="color: #003574;">
                                <i class="fas fa-home text-lg "></i>
                            </a>

                            <!-- form mẫu -->
                            
                            
                            <!-- hết form mẫu -->
                            @foreach( $cats as $cat)
                            <div class="navbar-item has-dropdown font-bold is-hoverable">
                                <a class="navbar-link text-sm " href="/danh-sach/{{$cat->slug}}"  style="color: #003574;">
                                {{$cat->name}}
                                
                                </a>
                                @if( $cat->chils->count())
                                @include('posts.child_category', ['cat' => $cat])
                                @endif
                            </div>
                            
                            
                            @endforeach
                        </div>
                    </div>
                </nav>
            </div>
        </div>


    <ul class="ml-5 mt-3">
        <li > <i class="fas fa-angle-right text-red-700 mr-2"></i><a href="/" class="text-black hover:text-red-900 font-bold text-lg ">Trang chủ </a></li>
        
                        @foreach($danhmuc as $dm)
                            <li><i class="fas fa-angle-right text-red-700 mr-2 mb-2"></i><a href="" title="Giới thiệu" class="text-black hover:text-red-900 font-bold text-lg ">{{$dm->name}}</a>
                                <ul class="ml-10">

                                    @foreach($gioithieu as $gt)
                                    @if($dm->id == $gt->danhmuc_id)

                                    @if($gt->loaibaiviet == 'baiviet')
                                    <li><i class="fas fa-angle-right text-red-700 mr-2 mb-2"></i><a href="/danh-muc/{{$gt->slug}}" title="" class="text-black hover:text-red-900 ">
                                            {{$gt->tendm}}</a></li>
                                    @else
                                    <li><i class="fas fa-angle-right text-red-700 mr-2"></i><a href="/van-ban/{{$gt->slug}}" title="" class="text-black hover:text-red-900 ">
                                            {{$gt->tendm}}</a></li>
                                    @endif
                                    
                                    @endif
                                    @endforeach

                                </ul>
                            </li>


                            @endforeach
        <li>
            <i class="fas fa-angle-right text-red-700 mr-2"></i><a href="/hoi-dap" class="text-black hover:text-red-900 font-bold text-lg ">Hỏi đáp </a>
        </li>
        <li>
            <i class="fas fa-angle-right text-red-700 mr-2"></i><a href="/lien-he" class="text-black hover:text-red-900 font-bold text-lg ">Liên hệ </a>
        </li>
       
    </ul>





@endsection