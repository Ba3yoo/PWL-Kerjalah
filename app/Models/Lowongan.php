<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $table = 'lowongan';

    protected $fillable = [
        'id_lowongan',
        'id_perusahaan',
        'jabatan',
        'jumlah_lowongan',
        'gaji',
        'deskripsi',
        'jam_kerja',
        'domisili',
        'pengalaman_kerja',
    ];
    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan');
    }

    public function lamaran()
    {
        return $this->hasMany(Apply::class, 'id_lowongan');
    }

}
