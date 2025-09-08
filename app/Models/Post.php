<?php

//ini untuk memberitau laravelnya kalau Post berada di folder App Models
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {


}



//class Post extends Model {
//
//    public static function all() {
//        return [
//            [
//                'id' => 1,
//                'slug' => 'membuat-website-hanya-5menit-menggunakan-html',
//                'title' => 'Membuat Website Hanya 5 Menit Menggunakan Html',
//                'author' => 'Biagi Archie Fais',
//                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae earum, eligendi facilis fugit laudantium nesciunt nulla omnis pariatur, perferendis quasi quibusdam repudiandae, tempore voluptates! Ducimus!'
//            ],
//            [
//                'id' => 2,
//                'slug' => 'styling-dengan-mudah-menggunakan-tailwind',
//                'title' => 'Styling Dengan Mudah Menggunakan Tailwind',
//                'author' => 'Faiz Jadul',
//                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae earum, eligendi facilis fugit laudantium nesciunt nulla omnis pariatur, perferendis quasi quibusdam repudiandae, tempore voluptates! Ducimus!'
//            ],
//        ];
//    }
//
//    // : array merupakan type return dari function ini berupa array agar lebih spesifik
//    public static function find($slug): array {
//
//        // memanggil method lain di class yang sama kita menggunakan static
////        return Arr::first(static::all(), function ($post) use ($slug) {
////            return $post['slug'] === $slug;   // kalaiu slug dari data Posts sama dengan slug yang dari URL return element datanya
////        });
//
//        $post = Arr::first(static::all(), fn($post) => $post['slug'] === $slug); // contoh yang mennggunakan arrow function php tanpa menggunakna use
//
//        if ( !$post ) {
//            abort(404, 'Post not found.');
//        }
//
//        return $post;
//
//    }
//
//
//}
