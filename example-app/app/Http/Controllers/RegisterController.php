<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('register.create');
    }
    public function store(){
        //kisi eklenecek
        $attributes= request()->validate([
            'name'=>'required|max:255|min:3',
            'username'=>'required|max:255|min:3|unique:users,username',
            'email'=>'required|email|max:255|unique:users,email',
            'password'=>'required|max:255|min:3'
        ]);
        $attributes['password']=bcrypt($attributes['password']);
        //password hashing
       $user=User::create($attributes);
       auth()->login($user);
       session()->flash('success','Your account has been created.');
       return redirect('/');
    }
}
