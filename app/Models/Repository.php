<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    use HasFactory;

    protected $table = 'repositories';
    
    protected $primaryKey = 'id_repository';
    
    protected $guard = 'id_repository';
}

