<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user')->paginate(25);
        return view('pages.post.index', compact('posts'));
    }

    /**
     * Display view with post detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $post = Post::with(['comments' => function ($q){
            $q->orderByDesc('id');
        }])->where('id', $id)->first();

        return view('pages.post.detail', compact('post'));
    }
}
