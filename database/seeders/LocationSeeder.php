<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loc = [
            [
                'nama_lokasi' => 'Pekanbaru',
                'deskripsi' => 'jalan pahlawan kerja gg bismillah',
                'latitude' => -8.5830695,
                'longtitude' => 116.3202515,
            ],
            [
                'nama_lokasi' => 'Perawang',
                'deskripsi' => 'BTN Cendrawasih',
                'latitude' => -8.5830695,
                'longtitude' => 116.3202515,
            ],
        ];

        foreach ($loc as $v) {
            Location::create($v);
        }
    }
}
