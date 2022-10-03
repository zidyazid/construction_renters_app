<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_perusahaan',
        'alamat',
        'nama_penyewa',
        'alamat_penyewa',
        'nik',
        'pekerjaan',
        'status',
    ];
}
