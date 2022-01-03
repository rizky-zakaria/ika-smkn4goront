<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'table_alumni';
    protected $fillabel = [
        'id', 'nama', 'tgl_lahir', 'pekerjaa', 'nomor_hp', 'jk'
    ];
}
