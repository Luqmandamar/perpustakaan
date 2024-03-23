<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaPerpustakaan extends Model
{
    use HasFactory;

    // menentukan nama tabel
    protected $table = 'anggota_perpustakaans';
    // menentukan primary key
    protected $primaryKey = 'id_anggota';
    // melindungi agar kolom tidak bisa di isi
    protected $guard = 'id_anggota';
    // menyembunyikan sebuah kolom
    protected $hidden = 'password';
}
