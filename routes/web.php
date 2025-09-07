<?php
//halaman route ini digunakna sebagain penjaluran dari request mirip seperti react router yang biasanya di file app.jsx



use Illuminate\Support\Facades\Route;

//panggil class Post yang ada di folder App Models yang sudah kita daftarkan dari Folder App Models
use App\Models\Post;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);    // menuju file views dengan nama home.blade.php
});


//["key" => "value"], parameter ke dua di view(), digunakan untuk mengirim data
Route::get('/about', function () {
    return view('about', ["nama" => "Biagi Archie Faisz", "title" => "About"]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});



//parameter kedua dari get() merupakan callback function yang akan dijalankan ketikan kita mengakses urlnya di parameter pertama
// /posts/{slug}, {slug}nya disebute wilecard, sama seperti dynamic route di react router contoh seperti /posts/:slug
// parameter di function callbacknya itu menangkap slug dari url
Route::get('/posts/{slug}', function ($slug) {



//     first itu mencari element pertama di dalam array berdasarkan kriteria yang kita mau cari, miri seperti find() kalau di javaScript
     $post = Post::find($slug);

     return view('post', ['title' => 'Single Post','post' => $post]);

});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

