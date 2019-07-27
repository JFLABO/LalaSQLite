<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 1. 新しい順に取得できない
        // $posts = Post::all();

        // 2. 記述が長くなる
        // $posts = Post::orderByDesc('created_at')->get();

        // 3. latestメソッドがおすすめ
        //$posts = Post::latest()->get();
        $posts = Post::orderByDesc('id')->get();
        return view('posts', ['posts' => $posts]);
    }
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
    public function posts_card(Post $post)
    {
        $posts = Post::orderByDesc('id')->get();
        return view('posts.cards', ['posts' => $posts]);
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        //$post->title = "'".$request->title."'";
        //$post->body = "'".$request->body."'";
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect('posts/'.$post->id);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response

    public function create()
    {
        //
    }
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
    public function show($id)
    {
        //
    }
    */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function edit(Post $post_id)
    public function edit(Post $post)
    {
        //$post = Post::orderByDesc('id')->get();
        //$post = Post::where('id',"1")->first();
        //$post=Post::table('daily')->where('id', '1')->first();
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect('posts/' . $post->id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('posts');
    }
}
