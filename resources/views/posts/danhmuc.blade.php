@extends('layout.trangchu')
@section('content')


<div class="col-span-12 text-blue-900 text-xl font-bold mb-4 px-4 py-4">
    <a href="/">TRANG CHỦ</a> > <a class="uppercase" href="/danh-muc/{{$category->slug}}">{{$category->name}}</a>
</div>


<div class="grid grid-cols-12 px-2">
    @foreach($posts as $ds)
    <div class="sm:col-span-3 col-span-12  sm:mr-3 mb-4">
        <div class="bv-img-s ">
            <a href="/chi-tiet-san-pham/{$ds->slug}"></a><img
                class="w-full sm:h-48 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                src="/storage/{{$ds->thumbnail }}" alt="">
            </a>
        </div>
        <div>
            <a href="/chi-tiet-san-pham/{{$ds->slug}}">
                <p class="sm:my-2 text-blue-900 text-xl font-bold text-justify">{{ $ds->title }}</p>
            </a>
            <p>Ngày đăng: {{$ds->nnd }}</p>
            <p class=" text-justify mt-2">{!! $ds->excerpt !!}</p>
        </div>
    </div>
    @endforeach
</div>

{{ $posts->links() }}







@endsection