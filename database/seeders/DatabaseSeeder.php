<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Admin::create([
             'username' => 'admin1',
             'password' => Hash::make ('admin1234'),
             'role'=> "admin"
         ]);

         \App\Models\Admin::create([
            'username' => 'pengguna1',
            'password' => Hash::make ('pengguna1234'),
            'role'=> "pengguna"
        ]);

        \App\Models\Kategori::create([
            'nama_kategori' => 'Buku Psikologi',
        ]);

        \App\Models\Kategori::create([
            'nama_kategori' => 'Buku Teknik Lingkungan',
        ]);

        \App\Models\Lokasi::create([
            'nama_lokasi' => 'lemari 1 rak 3 baris 3',
        ]);

        \App\Models\Lokasi::create([
            'nama_lokasi' => 'lemari 2 rak 3 baris 3',
        ]);
    }
}
