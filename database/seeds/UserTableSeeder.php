<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Siswa;
use App\Kelas;
use App\Spp;
use App\Pembayaran;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Admin',
            'email' => 'admin@spp.com',
            'password' => Hash::make('admin'),
            'level' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'name' => 'petugas',
            'email' => 'petugas@spp.com',
            'password' => Hash::make('petugas'),
            'level' => 'petugas',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Kelas::create([
            'nama_kelas' => 'XII RPL',
            'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak'
        ]);

        Spp::create([
            'tahun' => 2023,
            'nominal' => 150000
        ]);

        Siswa::create([
            'nisn' => '123456789876',
            'nis'  => '12000644',
            'nama' => 'M. Faliqh Yoon',
            'id_kelas' => 1,
            'nomor_telp' => '089689957106',
            'alamat' => 'Kuala Lumpur',
            'id_spp' => 1
        ]);

        Pembayaran::create([
            'id_petugas' => 2,
            'id_siswa' => 1,
            'spp_bulan' => 'Januari',
            'jumlah_bayar' => 150000

        ]);
    }
}
