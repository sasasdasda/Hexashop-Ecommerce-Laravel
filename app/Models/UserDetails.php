<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $table = 'user_details';
    protected $fillable = [
        'firstname',
        'lastname',
        'country',
        'status',
        'email_work',
        'store_location',
        'about',
        'profile_image',
        'rate',
        'user_id'
    ];
    use HasFactory;
}
