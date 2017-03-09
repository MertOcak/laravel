<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index(){

    	$post = Post::find(1);

		$allPosts = Post::all();


    	return view('posts.index',compact('post','allPosts'));

    }

    public function show(Post $post){

    	$allPosts = Post::all();

    	return view('posts.show',compact('post','allPosts'));

    }

    public function create(){

    	return view('posts.create');

    }

    public function store(){

        // dd(request()->all());
        
        // dd(request('title')); 
        
        // dd(request('body'));        

        // dd(request(['title', 'body']));
  
             

        // Create a new post using the request data

        // $post = new Post;

        // $post->title = request('title');

        // $post->body = request('body');


        // Save it to the database

        // $post->save();

        // Post::create([

        // 'title' => request('title'),

        // 'body' => request('body')

        //     ]);

        Post::create(request(['title','body']));

        // And then redirect it to the homepage

        return redirect('/');
    }
}
