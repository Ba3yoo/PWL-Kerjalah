<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $table = 'biodata';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'tanggal_lahir',
        'no_hp',
        'alamat',
        'jenis_kelamin'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
