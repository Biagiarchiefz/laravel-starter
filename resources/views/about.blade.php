<x-layout>
    {{--    $title disini merupakan varibel ke data yang dikirim dari halaman routenya--}}
    <x-slot:title> {{ $title }}</x-slot:title>
    Selamat Datanng di halaman about
    <p class="text-green-700">nama : {{ $nama }}</p>
</x-layout>
