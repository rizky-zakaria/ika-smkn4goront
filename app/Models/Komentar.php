<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $table = 'table_komentar';
    protected $fillable = [
        'id', 'name', 'email', 'company_name', 'subjek', 'komentar'
    ];
}
