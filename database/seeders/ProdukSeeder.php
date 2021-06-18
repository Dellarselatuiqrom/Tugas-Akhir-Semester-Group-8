<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert([
            [
                'kategori_id' => 1, // you can change this data
                'user_id' => 1,
                'kode_produk' => 'I0S1',
                'nama_produk' => 'HP IOS',
                'slug_produk' => 'HPIOS',
                'deskripsi_produk' => 'ini adalah deskripsi HP IOS',
                'foto' => 'files/apple-iphone-12-mini-r1.jpg',
                'qty' => 5,
                'satuan' => 1,
                'harga' => 1000000,
                'status' => 'publish',
            ],
            [
                'kategori_id' => 1, // you can change this data
                'user_id' => 1,
                'kode_produk' => 'I0S2',
                'nama_produk' => 'HP IOS2',
                'slug_produk' => 'HPIOS2',
                'deskripsi_produk' => 'ini adalah deskripsi HP IOS2',
                'foto' => 'files/apple-iphone-12-pro-max-1.jpg',
                'qty' => 3,
                'satuan' => 1,
                'harga' => 2000000,
                'status' => 'publish',
            ],
            [
                'kategori_id' => 1, // you can change this data
                'user_id' => 1,
                'kode_produk' => 'I0S3',
                'nama_produk' => 'HP IOS3',
                'slug_produk' => 'HPIOS3',
                'deskripsi_produk' => 'ini adalah deskripsi HP IOS3',
                'foto' => 'files/apple-iphone-12-pro-r1.jpg',
                'qty' => 10,
                'satuan' => 1,
                'harga' => 2500000,
                'status' => 'publish',
            ],
            [
                'kategori_id' => 2, // you can change this data
                'user_id' => 1,
                'kode_produk' => 'AND01',
                'nama_produk' => 'HP ANDROID',
                'slug_produk' => 'HPANDROID',
                'deskripsi_produk' => 'ini adalah deskripsi HP ANDROID',
                'foto' => 'files/realme-gt-neo-flash-edition-1.jpg',
                'qty' => 7,
                'satuan' => 1,
                'harga' => 3000000,
                'status' => 'publish',
            ],
            [
                'kategori_id' => 2, // you can change this data
                'user_id' => 1,
                'kode_produk' => 'AND02',
                'nama_produk' => 'HP ANDROID2',
                'slug_produk' => 'HPANDROID2',
                'deskripsi_produk' => 'ini adalah deskripsi HP ANDROID2',
                'foto' => 'files/samsung-galaxy-f52-5g-1.jpg',
                'qty' => 5,
                'satuan' => 1,
                'harga' => 1000000,
                'status' => 'publish',
            ],
            [
                'kategori_id' => 2, // you can change this data
                'user_id' => 1,
                'kode_produk' => 'AND03',
                'nama_produk' => 'HP ANDROID3',
                'slug_produk' => 'HPANDROID3',
                'deskripsi_produk' => 'ini adalah deskripsi HP ANDROID3',
                'foto' => 'files/samsung-galaxy-s21-ultra-5g.jpg',
                'qty' => 11,
                'satuan' => 1,
                'harga' => 5000000,
                'status' => 'publish',
            ],
        ]);
    }
}
