<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';
    
    protected $primaryKey = 'id_peminjaman';
    
    protected $guard = 'id_peminjaman';
}

