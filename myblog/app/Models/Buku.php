<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //jembatan anatar php dan database (model)
    //berisi representasi dari sebuah tabel di database dalam bentuk kelas

    //inisialisasi tabel
    protected $table="buku";

    //inisialisasi PK
    protected $primaryKey="id";

    //pilih inisialisi kolom yang boleh disi atau tidak pilih satu menidng guarded
    //inisialisasi kolom yang bisa diiisi
    // protected $fillable=['judul','harga','harga','tahun_terbit'];

    //inisialisasi kolom tidak boleh diisi
    protected $guarded=['id'];
}
