@extends('layouts.master')

@section('title')

{{$post->title}}

@endsection


@section('body')

<p class="blog-post-meta">
	{{$post->created_at->format('F d, Y')}} <a href="#">Mark Zuckerberg</a></p>
{{ $post->body }}   

@endsection