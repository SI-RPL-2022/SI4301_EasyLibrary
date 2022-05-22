<?php

namespace Database\Seeders;

use App\Models\DataBuku;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();


        User::create([
            'nama_depan' => 'Admin',
            'nama_belakang' => 'Hernanda',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'roles' => 'Admin'
        ]);

        DataBuku::create([
            'id_card' => 123456789,
            'judul' => 'Mindset',
            'tahun_terbit' => 2022,
            'status' => 'Tersedia',
            'pengarang' => 'Ahyar',
            'penerbit' => 'Ahyar Corporation',
            'id_rak' => 'A1',
            'foto' => 'foto-buku/mindset.png'
        ]);

        DataBuku::create([
            'id_card' => 120219000,
            'judul' => 'Think and Grow',
            'tahun_terbit' => 2021,
            'status' => 'Tersedia',
            'pengarang' => 'Soya',
            'penerbit' => 'Soya Corporation',
            'id_rak' => 'A1',
            'foto' => 'foto-buku/thinkgrow.png'
        ]);
    }
}
