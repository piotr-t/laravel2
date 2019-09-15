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

Route::get('/administrator', function () {
    $page2 = Page::all();
    $page1 = Product::all();
    $data= ["ciekawe czy się uda"];
    $pat = "litwo ojczyzno moja ty jestś jak zdrowie,lorem ipsum dole est";
    Mail::send('mail', $data, function($message)
{
    $message->to('troc.piotr@gmail.com', 'Piotr')->subject('Welcome!');
    $message->from('troc.piotr@gmail.com', 'Piotr');
    $message->attach(base_path('resources\views\tekst.txt'));//załącznik do wiadomości
});
    return view('administrator', compact('page1','page2'));
});

Route::get('/admfooter', function () {
    return view('admfooter');
});

Route::get('/{id}', function ($id) {

    $page = Page::find($id);
    return view('login',compact('page'));
});


