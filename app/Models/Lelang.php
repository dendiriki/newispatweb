<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    protected $table = 'lelang'; // Nama tabel yang benar
    protected $guarded = ['id'];

    use HasFactory;
}
