<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $tinh = config('mayviet.tinh');

        $posts = Post::where('id', '>', 1)->get();

        $postsWithPagination  = Post::where('id', '>', 1)->paginate(10);

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show($slug)
    {
        //$slug = 'bai-viet-so-1'
        $singlePost = Post::where('slug', $slug)->first();
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post', [
            'post' => $post,
        ]);
    }

    public function delete($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        if($post->delete()) {
            return 'Xoa thanh cong';
        }

        return "Co loi";
    }

    public function store()
    {
        $post = new Post;
        $post->title = 'New title';
        //...

        if($post->save()) {
            return 'Luu thanh cong';
        }

        return "Co loi";
    }

    public function update($id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        $post->title = 'New title';
        //...

        if($post->save()) {
            return 'Luu thanh cong';
        }

        return "Co loi";
    }
}
