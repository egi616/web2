<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//apabila manual
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //isnert ke tabel kategori
        $kategori = [
            [
                'nama_kategori' => 'Pemprograman',
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'nama_kategori' => 'Database design',
                'created_at' => now(),
                'updated_at' => now()

            ]
        ];
        DB::table('kategori')->insert($kategori);        
    }
}
