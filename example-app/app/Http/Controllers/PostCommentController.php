<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Post;
use Nette\Schema\ValidationException;
class PostCommentController extends Controller
{
    //




    public function store(Post $post){

        \request()->validate([
            'body'=>'required'
        ]);


        $post->comments()->create(
            [
                'user_id'=>auth()->id(),
                'body'=>request('body')
            ]);
        return back();
    }
}
