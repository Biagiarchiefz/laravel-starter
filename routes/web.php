<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);    // menuju file views dengan nama home.blade.php
});


//["key" => "value"], parameter ke dua di view(), digunakan untuk mengirim data
Route::get('/about', function () {
    return view('about', ["nama" => "Biagi Archie Faisz", "title" => "About"]);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
