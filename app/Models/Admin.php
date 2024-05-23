<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable 
{
    use HasFactory;
     
    protected $fillable = [
        'username',
        'password',
    ];

// public static function attemptLogin($username, $password)
public static function attemptLogin($arg)
{
    // dd($arg);
    $user = self::where('username', $arg['username'])-> first();

    if ($user && Hash::check($arg['password'], $user->password)){
        return $user;
    }

    return null;
}
     
    protected $hidden = [
        'password',
    ];

    public function username(){
        return "username";
    }
}
