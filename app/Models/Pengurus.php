<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    protected $table = 'table_pengurus';
    protected $fillable = [
        'id', 'id_alumni', 'jabatan', 'periode', 'sambutan', 'status'
    ];
}
