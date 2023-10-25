<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GejalaPenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // Rimpang Busuk
            [
                'penyakit_id' => 1,
                'gejala_id' => 1,
                'value_cf' => 1.0
            ],
            [
                'penyakit_id' => 1,
                'gejala_id' => 2,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 1,
                'gejala_id' => 3,
                'value_cf' => 1.0
            ],
            [
                'penyakit_id' => 1,
                'gejala_id' => 4,
                'value_cf' => 1.0
            ],

            // Layu Bakteria
            [
                'penyakit_id' => 2,
                'gejala_id' => 5,
                'value_cf' => 1.0
            ],
            [
                'penyakit_id' => 2,
                'gejala_id' => 6,
                'value_cf' =>1.0
            ],
            [
                'penyakit_id' => 2,
                'gejala_id' => 7,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 2,
                'gejala_id' => 8,
                'value_cf' => 1.0
            ],

            // Bercak daun
            [
                'penyakit_id' => 3,
                'gejala_id' => 9,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 3,
                'gejala_id' => 10,
                'value_cf' => 0
            ],
            [
                'penyakit_id' => 3,
                'gejala_id' => 11,
                'value_cf' => 0
            ]
        ];

        DB::table('gejala_penyakit')->insert($data);
    }
}
