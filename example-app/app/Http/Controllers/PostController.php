<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

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
    public function store()
    {

     //   Storage::disk('local')->put( 'public/thumbnails',\request('thumbnail'));
        $attributes=request()->validate([
            'title'=>'required',
            'thumbnail'=>'required|image',
            'slug'=>['required',Rule::unique('posts','slug')],
            'excerpt'=>'required',
            'body'=>'required',
            'category_id'=>['required',Rule::exists('categories','id')]
        ]);
        $attributes['user_id']=auth()->id();
        $attributes['thumbnail']=Storage::disk('local')->put( 'public',\request('thumbnail'));

        Post::create($attributes);
        return redirect("/");
    }
}
