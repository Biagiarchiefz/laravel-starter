<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');    // menuju file views dengan nama home.blade.php
});


//["key" => "value"], parameter ke dua di view(), digunakan untuk mengirim data
Route::get('/about', function () {
    return view('about', ["nama" => "Biagi Archie Faisz"]);
});

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/contact', function () {
    return view('contact');
});
