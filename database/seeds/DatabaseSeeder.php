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
            'id' => 1,
            'name'	=> 'admin',
            'nik' => '123123123',
            'nama_lengkap' => 'Administrator',
            'alamat' => 'Banyuwangi',
            'telepon' => '123123123',
            'jenis_kelamin' => 'laki-laki',
            'role' => 'admin',
            'password'	=> Hash::make('12345678'),
            'foto' => 'test.png'
        ]);
    }
}
