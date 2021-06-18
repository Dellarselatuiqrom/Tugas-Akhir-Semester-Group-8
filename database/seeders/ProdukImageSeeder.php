<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProdukImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('produk_images')->insert([
            [
                'produk_id' => '1', // you can change this data
                'foto' => 'files/apple-iphone-12-mini-r1.jpg',
            ],
            [
                'produk_id' => '2', // you can change this data
                'foto' => 'files/apple-iphone-12-pro-max-1.jpg',
            ],
            [
                'produk_id' => '3', // you can change this data
                'foto' => 'files/apple-iphone-12-pro-r1.jpg'
            ],
            [
                'produk_id' => '4', // you can change this data
                'foto' => 'files/realme-gt-neo-flash-edition-1.jpg',
            ],
            [
                'produk_id' => '5', // you can change this data
                'foto' => 'files/samsung-galaxy-f52-5g-1.jpg',
            ],
            [
                'produk_id' => '6', // you can change this data
                'foto' => 'files/samsung-galaxy-s21-ultra-5g.jpg',
            ],
        ]);
    }
}
