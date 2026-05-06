@extends('layouts.template')
{{-- untuk memanggil content --}}
@section('content')
    <div class = "container mt-2">
        <h2>Form buku</h2>
        <div class= "card">
            <div class="card-header">{{isset($detailBuku)? 'Edit' : 'Tambah'}} data buku</div>
            <div class="card-body">
                <form method="POST" 
                    action="{{ isset($detailBuku) ? 
                    route('update', ['id' => $detailBuku->id]) : 
                    route('store')}}">
                    {{-- dibutuhkan laravel untuk mengirim data --}}
                    @csrf 
                    @if (isset($detailBuku))
                        @method('put')
                    @endif

                    <div class="mb-3">
                        <label class="form-label">Judul buku</label>
                        {{-- ?? null coalition --}}
                        <input name="judul" type="text" class="form-control" value="{{old('judul', $detailBuku->judul ?? '')}}"> 
                        @error('judul')
                            <div class="form-text">{{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama penulis</label>
                        <input name="penulis" type="text" class="form-control" value="{{old('penulis', $detailBuku->penulis ?? '')}}">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        @error('penulis')
                            <div class="form-text">{{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input name="harga" type="text" class="form-control" value="{{old('harga', $detailBuku->harga ?? '')}}">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        @error('harga')
                            <div class="form-text">{{$message}} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun terbit</label>
                        <input name="tahun_terbit" type="text" class="form-control" value="{{old('tahun_terbit', $detailBuku->tahun_terbit ?? '')}}">
                        @error('tahun_terbit')
                            <div class="form-text">{{$message}} </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
