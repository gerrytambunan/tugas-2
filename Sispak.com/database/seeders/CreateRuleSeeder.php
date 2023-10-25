<?php

namespace Database\Seeders;

use App\Models\Rule;
use Illuminate\Database\Seeder;

class CreateRuleSeeder extends Seeder
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
                'kode_penyakit' => 'P01',
                'G01' => true,
                'G02' => true,
                'G03' => true,
                'G04' => true
            ],
            [
                'kode_penyakit' => 'P02',
                'G05' => true,
                'G06' => true,
                'G07' => true,
                'G08' => true
            ],
            [
                'kode_penyakit' => 'P03',
                'G09' => true,
                'G10' => true,
                'G11' => true
            ]
        ];

        foreach($data as $row) {
            Rule::create($row);
        }
    }
}
