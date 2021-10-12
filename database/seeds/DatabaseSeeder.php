<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'	=> 'admin',
            'nik' => '123123123',
            'nama_lengkap' => 'Administrator',
            'alamat' => 'Banyuwangi',
            'telepon' => '123123123',
            'jenis_kelamin' => 'laki-laki',
            'role' => 'admin',
            'password'	=> Hash::make('12345678'),
        ]);
    }
}
