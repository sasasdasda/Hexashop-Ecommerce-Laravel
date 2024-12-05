<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable implements AuthenticatableContract
{
    use HasFactory;
    protected $fillable = [
        'username',
        'email',
        'password',
    ];
    public $timestamps = true;
    // protected $guard = 'admin';
}
