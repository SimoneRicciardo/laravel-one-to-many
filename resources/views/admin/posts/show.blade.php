@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Details: {{$post->title}}</h2>


    <div><strong>Title:</strong> {{$post->title}}</div>
    <div><strong>Slug:</strong> {{$post->slug}}</div>
    <div><strong>Content:</strong> {{$post->content}}</div>
    <div><strong>Category:</strong>{{$post->category?$post->category->name: '-'}}</div>


    <a class="btn btn-primary" href="{{route('admin.posts.index')}}">Go Back</a>
</div>

@endsection