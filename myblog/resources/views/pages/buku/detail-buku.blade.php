@extends('layouts.template')
{{-- untuk memanggil content --}}
@section('content')
    <div class = "container mt-2">
        <h2>Form buku</h2>
        <div class= "card">
            <div class="card-header">Detail data buku</div>
            <div class="card-body">
                <p>Judul buku : {{$detailBuku->judul}}</p>
                <p>Penulis : {{$detailBuku->penulis}}</p>
                <p>Harga : {{$detailBuku->harga}}</p>
                <p>Tahun terbit : {{$detailBuku->tahun_terbit}}</p>
            </div>
        </div>
    </div>
@endsection
