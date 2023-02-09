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
            return view('posts.index',[
                'posts'=>Post::latest()->filter(
                    request(['search','category','authors']))
                    ->paginate(2)->withQueryString()
            ]);
    }

    public function show(Post $post)
    {
        return view('posts.show',[
            'post'=>$post
        ]);
    }

    public function create(){




        return view('posts.create');
    }
}
