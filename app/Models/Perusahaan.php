<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaan';

    protected $fillable = [
        'id_perusahaan',
        'nama_perusahaan',
        'deskripsi',
        'industri',
        'email_perusahaan',
        'logo'
    ];
    public function lowongan()
    {
        return $this->hasMany(Lowongan::class, 'id_perusahaan');
    }
}
