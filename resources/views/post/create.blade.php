@extends('layout\main')
@section('content')
<div>
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title" >
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="content" placeholder="Title" ></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input name="image" type="text" class="form-control" id="image" placeholder="Image" >
        </div>
        <div class="form-floating">
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="category_id">
         @foreach($categories as $category)
         <option value="{{$category->id}}">{{$category->title}}</option>
         @endforeach
        </select>
  <label for="category">Category</label>
</div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
