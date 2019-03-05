<?php

namespace Orm\Http\Controllers;

use Orm\Post;
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
//        $posts = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->get();
//        foreach($posts as $post){
//            echo "<h1>{$post->title}</h1>";
//            echo "<h2>{$post->subtitle}</h2>";
//            echo "<p>{$post->description}</p>";
//            echo "<hr>";
//        }

//        $post = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->first();
//        echo "<h1>{$post->title}</h1>";
//        echo "<h2>{$post->subtitle}</h2>";
//        echo "<p>{$post->description}</p>";
//        echo "<hr>";

//        $post = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->firstOrFail();
//        echo "<h1>{$post->title}</h1>";
//        echo "<h2>{$post->subtitle}</h2>";
//        echo "<p>{$post->description}</p>";
//        echo "<hr>";

//        $post = Post::find(10);
//        echo "<h1>{$post->title}</h1>";
//        echo "<h2>{$post->subtitle}</h2>";
//        echo "<p>{$post->description}</p>";
//        echo "<hr>";

//        $post = Post::findOrFail(10);
//        echo "<h1>{$post->title}</h1>";
//        echo "<h2>{$post->subtitle}</h2>";
//        echo "<p>{$post->description}</p>";
//        echo "<hr>";

        // max - min - sun - count -avg
//        $posts = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->max('title');
//        foreach($posts as $post){
//            echo "<h1>{$post->title}</h1>";
//            echo "<h2>{$post->subtitle}</h2>";
//            echo "<p>{$post->description}</p>";
//            echo "<hr>";
//        }
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Object -> Prop -> Save
//        $post = new Post;
//        $post->title = $request->title;
//        $post->subtitle = $request->subtitle;
//        $post->description = $request->description;
//        $post->save();

//        Post::create([
//            'title' => $request->title,
//            'subtitle' => $request->subtitle,
//            'description' => $request->description
//        ]);

//        $post = Post::firstOrNew([
//           'title' => 'teste2',
//            'subtitle' => 'teste2',
//            'description' => 'teste2'
//        ]);
//        $post->save();

//        $post = Post::firstOrCreate([
//           'title' => 'teste2',
//            'subtitle' => 'teste2',
//            'description' => 'teste2'
//        ]);

        //var_dump($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Orm\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Orm\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Orm\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Orm\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
