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


        Post::create(request(['title','body']));


        return redirect('/');
    }
}
