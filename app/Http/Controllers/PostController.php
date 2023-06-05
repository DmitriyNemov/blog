<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts= Post::where('is_published', 1)->get();
        foreach($posts as $post){
            dump($post->title);
        }

        dd('end');
    }

    public function create()
    {
        $postsArr=[
            [
                'title'=>'title of some phpstorm post',
                'content'=>'some interesting content',
                'image'=>'image4.jpg',
                'likes'=>20,
                'is_published'=>1,
            ],
            [
                'title'=>'another title of some phpstorm post',
                'content'=>'some another interesting content',
                'image'=>'image5.jpg',
                'likes'=>30,
                'is_published'=>1,
            ]
        ];
        foreach ($postsArr as $item){

        Post::create($item);
    }


        dd('created');
    }

    public function update()
    {
        $post= Post::find(5);
        $post->update([
            'title'=>'11111111111',
            'content'=>'2222222222',

        ]);
        dd('updated');

    }

    public function delete()
    {
        $post=Post::withTrashed()->find(2);
        $post->restore();
        dd('deleted');

    }
}
