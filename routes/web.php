<?php

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
use App\Product;
use App\Page;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    $page = Page::find(1);
    return view('login',compact('page'));
});

Route::get('/Sign', function () {
    return view('Sign');
});

Route::get('/administrator', 'pierwszyController@sendMail' ); //app/http/Controllers funkcja z kontrolera

Route::get('/admfooter', function () {
    return view('admfooter');
});

Route::get('/{id}', function ($id) {

    $page = Page::find($id);
    return view('login',compact('page'));
});


