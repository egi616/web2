<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\HalloController;

Route::get('/', function () {
    return view('welcome');
});

//routing
//return nya harus view bikin file di view
// Route::get('/hi', function () {
//     return ('halaman hi');
// });

// //alamat halo di bawah bisa banyak pakai slash
// Route::get('/halo', function () {
//     $namaLengkap = "Egi";
//     return view('halo', ['nama'=>$namaLengkap]);
// })->name ('halo');

//kalo pake folder nama folder url
// Route::get('/halo', function () {
//     $namaLengkap = "Egi";
//     return view('home.halo', ['nama'=>$namaLengkap]);
// });

//yang ke controller dulu
// Route::get('/halo', function () {

// });


//beda pertemuan

// parsing data (mengirimkan data ke views)
//     array
//     compact paling banyak digunkan
//      with

// Route::get('/sintaks',function(){
//     $nama = "Egi";
//     $alamat = "<b>Kebon jambe<b>";
//     // array
//     // return view('sintaks', ['nama_index'=>$nama, 'alamat_index'=>$alamat]);

//     $idUser ='100';
//     $nilai = 75;
//     $buah = array('apel','jeruk','mangga');
//     //compact
//     $data = compact ('nama', 'alamat', 'nilai', 'buah');
//     return view('sintaks', $data)-> with ('id', $idUser);
// });

// Route::get('/form', function(){
//     return view('form');
// });

// Route::post('/simpan.mahasiswa', function(){
//     $npm = request('npm');
//     $nama = request('nama');

//     return 'NPM: ' .$npm. ' Nama: ' .$nama;

// })->name('mahasiswa.simpan');

Route::get('/beranda', function () {
    return view('pages.beranda');
});
Route::get('/profil', function () {
    return view('pages.profil');
});
Route::get('/tentangKami', function () {
    return view('pages.tentangKami');
});
Route::get('/produk', function () {
    return view('pages.produk');
});