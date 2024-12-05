<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginMail extends Model
{
    use HasFactory;
    protected $table = 'loginmail';
    protected $fillable = [
        'user_email',
        'verfication_code',
    ];
}
