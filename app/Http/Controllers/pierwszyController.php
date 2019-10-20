<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Page;


class pierwszyController extends Controller
{
    public function sendMail (Request $request) {// Request $request - obiekt typu Request reprezentujący żądanie
        $page2 = Page::all();
        $page1 = Product::all();
    /*     $data= ["ciekawe czy się uda"];
        $pat = "litwo ojczyzno moja ty jestś jak zdrowie,lorem ipsum dole est";
        Mail::send('mail', $data, function($message)
    {
        $message->to('troc.piotr@gmail.com', 'Piotr')->subject('Welcome!');
        $message->from('troc.piotr@gmail.com', 'Piotr');
        $message->attach(base_path('resources\views\tekst.txt'));//załącznik do wiadomości(ścieżka lokalna)
    }); */



       sleep(100);// timer usypia program na 10ms



    //return redirect('login');//przekierowanie na login
    return response()->file(base_path('resources\views\studium.pdf'));//zwraca w odpowiedzi pdf i go wyświetla
   // return view('administrator', compact('page1','page2','request'));
    }
}
