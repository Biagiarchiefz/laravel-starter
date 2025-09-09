<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
//             pada saat kita membuat data dummy Postnya kita juga generate id author_id sambil membuat factory baru untuk User
            'author_id' => User::factory(),
            'category_id' => Category::factory(),
            'slug' => Str::slug(fake()->sentence()),
            'body' => fake()->text(),
        ];
    }


    // Secara default kalau kita menjalankan factory post dia akan membuat data user juga satu pasangan ke data post
    // Kalau misalnya kita ingin membuat data Usernya cuma 5 di tinkernya kita jalankan perintah
    // App\Models\Post::factory(10)->recycle(User::factory(5)->create())->create();
    // Menggunakan method recyle()
    // jadi arti kode tersebut adalah bikin 10 post dan buat hanya 5 User untuk masing"data postnya secara acak

}
