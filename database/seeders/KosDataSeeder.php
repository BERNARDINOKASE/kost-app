<?php

namespace Database\Seeders;

use App\Models\KosData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KosDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datakos = [
            [
                'nama_kos' => 'BETA KOS',
                'user_id' => 2,
                'tipe_kamar' => 3,
                'deskripsi' => 'Tidak Ada',
                'nama_pengelola' => 'Angga',
                'no_hp_pengelola' => '08213123123',
                'peraturan' => 'batas bertamu jam 10 malam, tamu wajib lapor',
                'fasilitas_kamar' => 'tempat tidur, meja, tv, lemari, ac, kursi, dapur dalam, kamar mandi dalam',
                'fasilitas_kamar_mandi' => 'shower, kloset duduk',
                'fasilitas_umum' => 'free wifi, air 24 jam, parkiran luas, lopo tempat nongkrong',
                'alamat' => 'PENFUI depan lapas dewasa',
                'p_kamar' => 3,
                'l_kamar' => 3,
                'jlh_kamar' => 12,
                'harga' => 900000
            ], [
                'nama_kos' => 'Kaka KOS',
                'user_id' => 3,
                'tipe_kamar' => 2,
                'deskripsi' => 'Tidak Ada',
                'nama_pengelola' => 'Angga',
                'no_hp_pengelola' => '08213123123',
                'peraturan' => 'batas bertamu jam 10 malam, tamu wajib lapor',
                'fasilitas_kamar' => 'tempat tidur, meja, tv, lemari, ac, kursi, dapur dalam, kamar mandi dalam',
                'fasilitas_kamar_mandi' => 'shower, kloset duduk',
                'fasilitas_umum' => 'free wifi, air 24 jam, parkiran luas, lopo tempat nongkrong',
                'alamat' => 'PENFUI depan lapas dewasa',
                'p_kamar' => 3,
                'l_kamar' => 3,
                'jlh_kamar' => 12,
                'harga' => 1200000
            ]
        ];
        foreach ($datakos as $data) {
            KosData::create($data);
        }
    }
}
