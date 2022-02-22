<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'table_alumni';
    protected $fillabel = [
        'id', 'nama', 'tgl_lahir', 'jk', 'pekerjaan', 'nomor_hp', 'foto', 'agama', 'tempat_kerja', 'alamat', 'thn_angkatan'
    ];

    public $timestamps = false;
    public $incrementing = false;
}
