<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Routing\Controller;
use Nette\Schema\ValidationException;

class SessionsContoller extends Controller
{
    //
    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success','GOOD BYE');
    }
    public function create(){
        return view('sessions.create');
    }
    public function store(){
        //login yaptığını burada etkinlestiriyoruz.

        //validate the request
        $attributes=request()->validate([
            'email'=>'required|email',
           'password'=>'required'
        ]);

        if(auth()->attempt($attributes)){
            session()->regenerate();
            return redirect('/')->with('success','Welcome Back!');
        }
//if auth failed
        return back()->
        withInput()->
        withErrors(['email'=>'Kullanıcı adı veya şifre hatalı.']);


    }
}
