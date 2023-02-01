<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/', 'HomeController@index');
//yukarıdakini görünce aşağıya benzetmelisin çünkü laravel sürümü yeni.
//Route::get('/checking', '\App\Http\Controllers\HomeController@index');
//__

use App\Http\Controllers\PostsController; //
Route::get('/posts/contact', [PostsController::class, 'contact']);

Route::resource('post', PostsController::class);

Route::get('posts/{veri}/{veri2}',[PostsController::class, 'showPost']);


//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/about', function () {
//    return "HI ABOUT PAGE";
//});
//
//Route::get('/contact', function () {
//    return "I'M CONTACT!";
//});
//
//Route::get('/post/{id}/{name}   ',function($id,$name){
//    return "This is post number : ".$id." ".$name;
//});
//
//Route::get('admin/posts/example',array('as'=>'admin.home', function (){
//    $url=route('admin.home');
//    return "this url is".$url;
//
//}));
