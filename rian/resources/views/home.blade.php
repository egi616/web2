@extends('layout')

@section('title', 'home')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-2">Halaman Home</h1>
    <p class="text-gray-600">
        Ini adalah contoh penggunaan section dan yield dengan Tailwind CSS di Laravel 12.
    </p>

    <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Klik Saya
    </button>
</div>
@endsection