<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    use HasFactory;

    protected $table = 'riwayat_pendidikan';
    protected $fillable = [
        'user_id',
        'jenjang_pendidikan',
        'nama_instansi',
        'tanggal_lulus',
    ];
}
