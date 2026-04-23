@extends('layouts.template')
{{-- untuk memanggil content --}}
@section('content')
    <div class = "container mt-2">
        <h2>Form buku</h2>
        <div class= "card">
            <div class="card-header">Tambah Buku</div>
            <div class="card-body">
                <form action="{{route('store')}}" method="POST">
                    {{-- dibutuhkan laravel untuk mengirim data --}}
                    @csrf 
                    <div class="mb-3">
                        <label class="form-label">Judul buku</label>
                        <input name="judul" type="text" class="form-control">
                        @error('judul')
                            <div class="form-text">{{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama penulis</label>
                        <input name="penulis" type="text" class="form-control">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input name="harga" type="text" class="form-control">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun terbit</label>
                        <input name="tahun_terbit" type="text" class="form-control">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
