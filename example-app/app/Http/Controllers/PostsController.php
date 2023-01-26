<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

//Route::get('/', 'HomeController@index');
//yukarıdakini görünce aşağıya benzetmelisin çünkü laravel sürümü yeni.
//Route::get('/checking', '\App\Http\Controllers\HomeController@index');
//__
//use App\Http\Controllers\HomeController; //
//Route::get('/', [EdwinsController::class, 'index']);

class PostsController extends controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return "router-> controllera, controler da ekrana veriyi verdi.
        o veri bu veridir. <br> buraya bir sayi geldi o da şudur =".$id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "router-> controllera, controler da ekrana veriyi verdi.";

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function contact(){
        $people=['Edwin','Osman','cocuklari','Peter','Maria'];
        return view("contact", compact('people'));

    }
    public function showPost($veri1,$veri2){
        return view('showPost', ['veri1' => $veri1], [ 'veri2' => $veri2]);
    }

}
