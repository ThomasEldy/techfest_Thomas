<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nis',
        'nama',
        'kelas',
        'tempat_lahir',
        'tanggal_lahir',
        'foto',
        'alamat',
        'no_telpon',
    ];
}
