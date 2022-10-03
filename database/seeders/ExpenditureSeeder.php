<?php

namespace Database\Seeders;

use App\Models\Expenditure;
use Illuminate\Database\Seeder;

class ExpenditureSeeder extends Seeder
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
                'tag' => 'perbaikan',
                'tujuan' => 'Perbaikan kerusakan pada ...',
                'keterangan' => 'lorem',
                'total_biaya' => 1200000
            ],
            [
                'tag' => 'perbaikan',
                'tujuan' => 'Perbaikan kerusakan pada ...',
                'keterangan' => 'lorem',
                'total_biaya' => 1500000
            ],
        ];

        foreach ($data as $v) {
            # code...
            Expenditure::create($v);
        }
    }
}
