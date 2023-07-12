<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        $tag=Tag::find(1);

        
        
         return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories=Category::all();
        return view('post.create', compact('categories'));
    }

    public function store()
    {
        $data=request()->validate([
                'title'=>'string',
                'content'=>'string',
                'image'=>'string',
                'category_id'=>'',
        ]);
       Post::create($data);
       return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories=Category::all();
        return view('post.edit',compact('post', 'categories') );

    }

    public function update(Post $post)
    {
        $data=request()->validate([
            'title'=>'string',
            'content'=>'string',
            'image'=>'string',
            'category_id'=>'',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
    public function delete()
    {
        $post=Post::withTrashed()->find(2);
        $post->restore();
        dd('deleted');

    }

    public function firstOrCreate()
    {

        $anotherPost=[
            'title'=>'some post',
            'content'=>'some content',
            'image'=>' some image4.jpg',
            'likes'=>560,
            'is_published'=>1,
        ];

        $post= Post::firstOrCreate([
            'title'=>'some post',
        ], [
            'title'=>'some post',
            'content'=>'some content',
            'image'=>'some image4.jpg',
            'likes'=>560,
            'is_published'=>1,
        ]);
        dump($post->content);
        dd('finished');
    }

    public function updateOrCreate()
    {
        $anotherPost=[
            'title'=>'some post',
            'content'=>'some content',
            'image'=>' some image4.jpg',
            'likes'=>560,
            'is_published'=>1,
        ];

        $post=Post::updateOrCreate([
            'title'=>'some post',
            ], [
            'title'=>'some post',
            'content'=>'some content',
            'image'=>' some image4.jpg',
            'likes'=>560,
            'is_published'=>1,
        ]);
        dump($post->content);
        dd('finished');
    }
}
