{{--{{dd($posts)}}--}}
<x-layout>
    {{--    $title disini merupakan varibel ke data yang dikirim dari halaman routenya--}}
    <x-slot:title> {{ $title }} </x-slot:title>
    @foreach( $posts as $post )
        <article class="text-white max-w-screen-md border-b py-8">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="text-3xl font-bold">{{ $post['title'] }}</h2>
            </a>
            <div class="mt-5 text-base text-gray-500">
                By
                <a href="/author/{{ $post->author->id }}" class="hover:underline">{{ $post->author->name }}</a> in
                <a href="/category/{{ $post->category->id }}" class="hover:underline">{{ $post->category->name_category }}</a>
                | {{ $post -> created_at -> diffForHumans()}}
            </div>
            <p class="my-3">{{ Str::limit($post['body'], 100)  }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="text-blue-500 hover:underline font-medium">Read more &raquo;</a>
        </article>
    @endforeach


</x-layout>
