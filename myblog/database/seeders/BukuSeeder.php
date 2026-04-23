<?php

namespace Database\Seeders;

//libralry laravel awalnya pasti iilumitae
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//manual
use Illuminate\Support\Facades\DB;
//untuk faker
use Faker\Factory as Faker;


class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //id_ID untuk nama indonesia 
        //untuk data bnanyak pakai looping
        // $faker = Faker::create();
        // $data = [
        //     'judul'=> $faker->sentence(4),	
        //     'penulis'=>  $faker->name(),	
        //     'tahun_terbit'=> $faker-> year,	
        //     'kategori_id'=> 1,	
        //     'created_at'=> now(),	
        //     'updated_at'=> now()	
        // ];

        $faker = Faker::create('id_ID');

        $data=[];
        $judulBuku = [
            "Pengantar Teknologi Informasi",
            "Algoritma dan Pemrograman Dasar",
            "Logika Informatika",
            "Struktur Data dan Algoritma",
            "Dasar-Dasar Jaringan Komputer",
            "Sistem Operasi Komputer",
            "Rekayasa Perangkat Lunak",
            "Pengantar Kecerdasan Buatan",
            "Pemrograman Web Berbasis HTML, CSS, dan JavaScript",
            "Keamanan Sistem Informasi"
        ];
        for($i=0; $i<5; $i++)
            {
                $data[] = [
                    // 'judul'=> $faker->sentence(4),	
                    'judul'=> $faker->unique()->randomElement($judulBuku),
                    'penulis'=>  $faker->name(),
                    'harga'=> $faker->numberBetween(50000,2000000),	
                    'tahun_terbit'=> $faker-> year,	
                    'kategori_id'=> DB::table('kategori')->inRandomOrder()->value('id'),	
                    'created_at'=> now(),	
                    'updated_at'=> now()	
                ];
            }
        DB::table('buku')->insert($data);
    }
}
