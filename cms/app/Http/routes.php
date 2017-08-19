<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('welcome');

});
//
//
//Route::get('/about', function () {
//
//    return "Hi about page";
//
//});
//
//
Route::get('/contact', 'PostsController@contact');
//
//
//Route::get('/post/{id}/{name}', function($id, $name){
//
//    return "This is post number ". $id . " " . $name;
//
//});
//
//
//Route::get('/admin/posts/example', array('as'=>'admin.home', function(){
//
//    $url = route('admin.home');
//
//    return "This url is ". $url;
//
//}));


//Route::get('/post/{id}/{student}/{course}/{grade}', 'PostsController@index');


//Route::resource('post/{id}/{student}/{course}/{grade}', 'PostsController');

Route::get('/post/{id}/{name}/{course}/{grade}', 'PostsController@show_post');