<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1 : Buat akun awal untuk Dosen.
        // Hint:
        // - Gunakan email sebagai identitas akun.
        // - Lengkapi nama, password yang di-hash, role Dosen,dan nomor induk.
        User::updateOrCreate(
            ['email' => 'arif@gmail.com'],
            [
                'name' => 'Arif Rahman Hakim',
                'password' => Hash::make('arif123'),
                'role' => 'dosen',
                'nomor_induk' => '1234567890',
            ]
        );

        User::updateOrCreate(
            ['email' => 'alan@gmail.com'],
            [
                'name' => 'Alan Abyan Maftuh',
                'password' => Hash::make('alan123'),
                'role' => 'mahasiswa',
                'nomor_induk' => '102042500006',
            ]
        );
    }
}
