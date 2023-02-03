<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class PostController extends Controller
{
    public function  index(){

        $posts=Post::latest();

        if(request('search') || request('category')){
            return view('posts',[
                'posts'=>Post::latest()->filter(request(['search','category']))->get(),
                'categories'=>category::all(),
                'currentCategory' => category::firstWhere('slug',request('category'))

            ]);
        }
        return view('posts',[
            'posts'=>Post::latest()->get(),
            'categories'=>category::all()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            'post'=>$post
        ]);
    }



}
