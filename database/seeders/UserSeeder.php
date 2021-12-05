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
                'username' => 'katonwijana',
                'nama' => 'Katon Wijana',
                'nomor_induk' => 119022,
                'np_hp' => '081315927777',
                'email' => 'dosen@gmail.com',
                'password' => bcrypt(123456),
                'role' => 'dosen'
            ],
            [
                'username' => 'anto123',
                'nama' => 'Aldi Widodo',
                'nomor_induk' => 119022,
                'np_hp' => '08954121111',
                'email' => 'mahasiswa@gmail.com',
                'password' => bcrypt(123456),
                'role' => 'mahasiswa'
            ],
            [
                'username' => 'andi123',
                'nama' => 'Aldi Widodo',
                'nomor_induk' => 119022,
                'np_hp' => '08954121111',
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
