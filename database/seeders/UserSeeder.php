<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $inputan['name'] = 'iqrom';
        $inputan['email'] = 'iq@gmail.com';//ganti pake emailmu
        $inputan['password'] = Hash::make('12345678');//passwordnya 123258
        $inputan['phone'] = '085236701223';
        $inputan['alamat'] = 'RT/RW: 007/003, Desa Baureno';
        $inputan['role'] = 'admin';//kita akan membuat akun atau users in dengan role admin
        User::create($inputan);
    }
}
