<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HalloController;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});

//routing
//return nya harus view bikin file di view
// Route::get('/hi', function () {
//     return ('halaman hi');
// });

// //alamat halo di bawah bisa banyak pakai slash
Route::get('/halo', function () {
    $namaLengkap = "Egi";
    return view('halo', ['nama'=>$namaLengkap]);
})->name ('halo');

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

//. 
// Route::get('/buku', function ([BukuController::class,'index'])->name('buku');

//routing untuk create dan tambah
Route::get('/buku', [BukuController::class, 'index'])->name('buku');
Route::get('/create', [BukuController::class, 'create'])->name('form-create');
//post untuk simpan
Route::post('/store', [BukuController::class, 'store'])->name('store');

//routing untuk detail
Route::get('/detail-buku/{id}/detail-data-buku', [BukuController::class, 'show'])->name('detail-buku');

//route untuk edit
Route::get('/edit-buku/{id}/edit-data-buku', [BukuController::class, 'edit'])->name('edit-buku');
//put utnutk edit dan hapus
Route::put('/update-buku/{id}/update-data-buku', [BukuController::class, 'update'])->name('update');
