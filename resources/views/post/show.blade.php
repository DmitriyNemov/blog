@extends('layout\main')
@section('content')
<div>
        <div>{{$post->id}} . {{$post->title}}</div>
        <div>{{$post->content}}</div>
    <div>
        <a href="{{route('post.edit', $post->id)}}">Edit</a>
    </div>
    <div>
        <a href="{{route('post.index')}}">back</a>
    </div>
</div>
@endsection
