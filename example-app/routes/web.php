<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\category;
use App\Models\User;
use App\Http\Controllers\PostController;
Route::get('/',[PostController::class,'index']);
Route::get('posts/{post:slug}',[PostController::class,'show']);
Route::get('categories/{category:slug}',function(category $category){
    return view('posts',[
        'posts'=>$category->posts,
        'categories'=>category::all(),
        'currentCategory'=>$category
    ]);
});
Route::get('authors/{author:username}',function(User $author){
    return view('blog\posts',[
        'posts'=>$author->posts,
        'categories'=>category::all()
    ]);
});
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
//
//use App\Http\Controllers\PostsController; //
//Route::get('/posts/contact', [PostsController::class, 'contact']);
//
//Route::resource('post', PostsController::class);
//
//Route::get('posts/{veri}/{veri2}',[PostsController::class, 'showPost']);
//
//Route::get('/insert',function() { //CRUD BAŞLIYOR, MİGRATİONDAN SONRA GELİYOR.
//    DB::insert('insert into posts(title,content,created_at) values(?,?,?)',
//    ['PHP with Laravel','Laravel is the best thing that has happen',date("Y/m/d")]);
//});
//
//Route::get('/read',function(){
//
//    $results=DB::select('select * from posts where id = ?' ,[1]);
//    foreach ($results as $post){
//        return $post->title;
//    }
//
//});
//
//Route::get('/update', function(){
//
//    $updating=DB::update('update posts set title="Updated title" where id=2');
//
//});
//
//Route::get('/delete',function(){
//    $deleted = DB::select('delete  from posts where id = ?' ,[2]);
//    return $deleted->title;
//});


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



/*
 *
 * ELOQUENT
 *
*/
