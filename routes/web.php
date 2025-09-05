<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);    // menuju file views dengan nama home.blade.php
});


//["key" => "value"], parameter ke dua di view(), digunakan untuk mengirim data
Route::get('/about', function () {
    return view('about', ["nama" => "Biagi Archie Faisz", "title" => "About"]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'membuat-website-hanya-5menit-menggunakan-html',
            'title' => 'Membuat Website Hanya 5 Menit Menggunakan Html',
            'author' => 'Biagi Archie Fais',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae earum, eligendi facilis fugit laudantium nesciunt nulla omnis pariatur, perferendis quasi quibusdam repudiandae, tempore voluptates! Ducimus!'
        ],
        [
            'id' => 2,
            'slug' => 'styling-dengan-mudah-menggunakan-tailwind',
            'title' => 'Styling Dengan Mudah Menggunakan Tailwind',
            'author' => 'Faiz Jadul',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae earum, eligendi facilis fugit laudantium nesciunt nulla omnis pariatur, perferendis quasi quibusdam repudiandae, tempore voluptates! Ducimus!'
        ],
    ]]);
});



//parameter kedua dari get() merupakan callback function yang akan dijalankan ketikan kita mengakses urlnya di parameter pertama
// /posts/{slug}, {slug}nya disebute wilecard, sama seperti slug di react router seperti /posts/:slug
// parameter di function callbacknya itu menangkap slug dari url
Route::get('/posts/{slug}', function ($slug) {

     $posts = [
         [
             'id' => 1,
             'slug' => 'membuat-website-hanya-5menit-menggunakan-html',
             'title' => 'Membuat Website Hanya 5 Menit Menggunakan Html',
             'author' => 'Biagi Archie Fais',
             'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae earum, eligendi facilis fugit laudantium nesciunt nulla omnis pariatur, perferendis quasi quibusdam repudiandae, tempore voluptates! Ducimus!'
         ],
         [
             'id' => 2,
             'slug' => 'styling-dengan-mudah-menggunakan-tailwind',
             'title' => 'Styling Dengan Mudah Menggunakan Tailwind',
             'author' => 'Faiz Jadul',
             'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae earum, eligendi facilis fugit laudantium nesciunt nulla omnis pariatur, perferendis quasi quibusdam repudiandae, tempore voluptates! Ducimus!'
         ],
     ];

//     first itu mencari element pertama di dalam array berdasarkan kriteria yang kita mau cari, miri seperti find() kalau di javaScript
     $post = Arr::first($posts, function ($value) use ($slug) {
         return $value['slug'] === $slug;
     });

     return view('post', ['title' => 'Single Post','post' => $post]);

});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
