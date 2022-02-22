<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;
    protected $table = 'table_pekerjaan';
    protected $fillabel = [
        'id', 'pekerjaan'
    ];

    public $timestamps = false;
}
