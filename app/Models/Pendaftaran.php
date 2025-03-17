<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftarans'; // Pastikan sesuai dengan tabel di database

    protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'hobi',
        'foto'
    ];

    protected $casts = [
        'hobi' => 'array', // Pastikan agar hobi tersimpan dalam format JSON
    ];
}
