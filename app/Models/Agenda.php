<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $table = 'table_agenda';
    protected $fillable = [
        'id', 'judul', 'teruntuk', 'tgl_agenda', 'isi', 'waktu_post'
    ];
    public $timestamps = false;
}
