<?php

namespace Database\Seeders;

use App\Models\Renter;
use Illuminate\Database\Seeder;

class RenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Renter::create([
            'nama_perusahaan' => 'Step up developer',
            'alamat' => 'Pekanbaru',
            'nama_penyewa' => 'Roni',
            'alamat_penyewa' => 'Pekanbaru',
            'nik' => '00000019000',
            'pekerjaan' => 'Mandor',
            'status' => 'Pihak Penyewa',
        ]);
    }
}
