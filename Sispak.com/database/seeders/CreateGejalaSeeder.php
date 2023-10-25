<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Seeder;

class CreateGejalaSeeder extends Seeder
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
                'nama' => 'Helai daun bawah melipat dan menggulung',
                'kode' => 'G01'
            ],
            [
                'nama' => 'Perubahan warna dari hijau ke kuning',
                'kode' => 'G02'
            ],
            [
                'nama' => 'Tunas batang menjadi busuk',
                'kode' => 'G03'
            ],
            [
                'nama' => 'Tanaman rebah dan mati',
                'kode' => 'G04'
            ],
            [
                'nama' => 'Tanaman tampak layu pada umur 2 bulanan',
                'kode' => 'G05'
            ],
            [
                'nama' => 'Daun menguning',
                'kode' => 'G06'
            ],
            [
                'nama' => 'Daun mengering',
                'kode' => 'G07'
            ],
            [
                'nama' => 'Rimpang membusuk dan mengeluarkan lendir',
                'kode' => 'G08'
            ],
            [
                'nama' => 'Pangkal batang membusuk',
                'kode' => 'G09'
            ],
            [
                'nama' => 'Daun berlubang-lubang',
                'kode' => 'G010'
            ],
            [
                'nama' => 'Bintik bintik kuning agak banyak berbentuk bercak',
                'kode' => 'G011'
            ]
        ];

        Gejala::insert($data);
    }
}
