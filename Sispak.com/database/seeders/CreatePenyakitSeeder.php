<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Seeder;

class CreatePenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Rimpang Busuk',
                'kode' => 'P01',
                'penyebab' => 'Penyakit ini dapat masuk ke bibit rimpang jahe melalui luka pada bibit jahe dan tumbuh pada suhu 20-25 derajat C, kemudian terus berkembang akhirnya menyebabkan rimpang menjadi busuk.'
            ],
            [
                'nama' => 'Layu Bakteria',
                'kode' => 'P02',
                'penyebab' => 'Pertama daun akan melipat dan munggulung kemudian terjadi perubahan warna dari hijau menjadi kuning dan mengering.'
            ],
            [
                'nama' => 'Bercak daun',
                'kode' => 'P03',
                'penyebab' => 'Penyakit bercak daun yang disebabkan Penyakit ini dapat menular dengan bantuan angin dan masuk melalui luka pada jahe.'
            ]
        ];

        Penyakit::insert($data);
    }
}
