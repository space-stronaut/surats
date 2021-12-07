<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'dosenA',
                'nama' => 'Dosen A',
                'nomor_induk' => 111200,
                'np_hp' => '081315927777',
                'email' => 'dosen@gmail.com',
                'password' => bcrypt(123456),
                'role' => 'dosen'
            ],
            [
                'username' => 'mahasiswaA',
                'nama' => 'Mahasiswa A',
                'nomor_induk' => 72190000,
                'np_hp' => '08954121111',
                'email' => 'mahasiswa@gmail.com',
                'password' => bcrypt(123456),
                'role' => 'mahasiswa'
            ],
            [
                'username' => 'adminA',
                'nama' => 'Admin A',
                'nomor_induk' => 001,
                'np_hp' => '081345629756',
                'email' => 'ppa@gmail.com',
                'password' => bcrypt(123456),
                'role' => 'ppa'
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
