<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    use HasFactory;
    protected $table = 'table_agama';
    protected $fillabel = [
        'id', 'agama'
    ];

    public $timestamps = false;
}
