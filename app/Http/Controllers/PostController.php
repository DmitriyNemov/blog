<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {


        return view('posts');
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
