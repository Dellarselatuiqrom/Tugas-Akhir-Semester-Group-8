<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            [
                'kode_kategori' => 'i0S', // you can change this data
                'nama_kategori' => 'IOS',
                'slug_kategori' => 'I0S1',
                'deskripsi_kategori' => 'KATEGORI IOS',
                'status' => 'publish',
                'foto' => 'files/apple-iphone-12-mini-r1.jpg',
                'user_id' => 1,
            ],
            [
                'kode_kategori' => 'AND0', // you can change this data
                'nama_kategori' => 'ANDROID',
                'slug_kategori' => 'ANDROID1',
                'deskripsi_kategori' => 'KATEGORI ANDROID',
                'status' => 'publish',
                'foto' => 'files/xiaomi-mi-10t-5g-1.jpg',
                'user_id' => 1,
            ],
        ]);
    }
}
