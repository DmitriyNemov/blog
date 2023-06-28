@extends('layout\main')
@section('content')
<div>
    <div><a href="{{route('posts.create')}}">Create</a> </div>
          @foreach($posts as $post)
        <div><a href="{{route('post.show', $post->id)}}"> {{$post->id}} . {{$post->title}} </a></div>
          @endforeach
</div>
@endsection
