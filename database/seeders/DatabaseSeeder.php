<?php

namespace Database\Seeders;

use App\Models\DataBuku;
use App\Models\DataRak;
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
            'nama_belakang' => 'Ahyar',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'roles' => 'Admin'
        ]);

        User::create([
            'nama_depan' => 'Ahyar',
            'nama_belakang' => 'Ganteng',
            'email' => 'ahyar@gmail.com',
            'password' => Hash::make('12345678'),
            'roles' => 'User',
            'id_card' => '12345678',
            'no_handphone' => '0812345678',
            'alamat' => 'Aceh',
            'negara' => 'Indonesia',
            'provinsi' => 'Aceh',
            'foto' => 'foto-user/KuDROicKKqkHFvJfO5kqUAYDAePgHYOM0Ls9QEI9.png',
            'kyc' => 'file-user/Profile KYC Ahyar.pdf'
        ]);

        DataRak::create([
            'nomor' => 'A1',
            'kapasitas' => 100,
            'Jenis' => 'Jurnal'
        ]);

        DataBuku::create([
            'id_buku' => 'KDBINPUT-123456789',
            'judul' => 'Mindset',
            'tahun_terbit' => 2022,
            'status' => 'Tersedia',
            'pengarang' => 'Ahyar',
            'penerbit' => 'Ahyar Corporation',
            'rak_id' => 1,
            'tipe_buku' => 'Inputan',
            'foto' => 'foto-buku/mindset.png'
        ]);

        DataBuku::create([
            'user_id' => 2,
            'id_buku' => 'KDBDONASI-12345678',
            'judul' => 'Think and Grow',
            'tahun_terbit' => 2021,
            'status' => 'Tersedia',
            'pengarang' => 'Soya',
            'penerbit' => 'Soya Corporation',
            'rak_id' => 1,
            'tipe_buku' => 'Donasi',
            'foto' => 'foto-buku/thinkgrow.png'
        ]);
    }
}