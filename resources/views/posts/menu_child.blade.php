<ul class="submenuchild">
    @foreach( $danhmuc as $dm)
    @if($dm['loaibv_id'] == 1)
    <li>
        <a href="/bai-viet/{{$dm['slug']}}">
            {{$dm['label']}}
        </a>
        @if ($dm['kiemtra']==1)
        @include('posts.menu_child',['danhmuc' => $dm['children']])
        @endif
    </li>
    @elseif($dm['loaibv_id'] == 2)
    <li>
        <a href="/san-pham/{{$dm['slug']}}">
            {{$dm['label']}}
        </a>
        @if ($dm['kiemtra']==1)
        @include('posts.menu_child',['danhmuc' => $dm['children']])
        @endif
    </li>
    @else($dm['loaibv_id'] == 3)
    <li>
        <a href="/danh-muc/{{$dm['slug']}}">
            {{$dm['label']}}
        </a>
        @if ($dm['kiemtra']==1)
        @include('posts.menu_child',['danhmuc' => $dm['children']])
        @endif
    </li>
    @endif

    @endforeach
</ul>