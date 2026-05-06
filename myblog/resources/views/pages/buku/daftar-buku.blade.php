@extends('layouts.template')
{{-- untuk memanggil content --}}
@section('content')
    <div class = "container mt-2">
        <h2>Halaman Buku</h2>
        @if (@session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <div class= "card p-3">
            <div class= 'mb2'>
                <a href="{{route('form-create')}}" class="btn btn-primary btn-sm"> Tambah data </a>
            </div>

            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Tahun terbit</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataBuku as $item)
                        <tr>
                        <th scope="row" class="text-center">{{$loop->iteration}}</th>
                        <td>{{$item->judul}}</td>
                        <td>{{$item->penulis}}</td>
                        <td>{{$item->harga}}</td>
                        <td>{{$item->tahun_terbit}}</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                            <a href="{{route ('edit-buku', ['id'=>$item->id])}}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{route ('detail-buku', ['id'=>$item->id])}}" class="btn btn-info btn-sm">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
