<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'table_berita';
    protected $fillable = [
        'id', 'judul', 'isi', 'foto'
    ];

    public $incrementing = false;
}
