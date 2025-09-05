{{--{{dd($posts)}}--}}
<x-layout>
    {{--    $title disini merupakan varibel ke data yang dikirim dari halaman routenya--}}
    <x-slot:title> {{ $title }} </x-slot:title>

    <article class="text-white max-w-screen-md py-8">

        <h2 class="text-3xl font-bold">{{ $post['title'] }}</h2>

        <div class="mt-5 text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 1 Januari 2028
        </div>
        <p class="my-3">{{$post['body']}}</p>
        <a href="/posts" class="text-blue-500 hover:underline font-medium">&laquo; Back to</a>
    </article>


</x-layout>
