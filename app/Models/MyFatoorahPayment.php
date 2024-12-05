<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyFatoorahPayment extends Model
{
    use HasFactory;
    protected $table = 'myfatoorah_payment';
    protected $fillable = [
        'user_id',
        'payment_id',
        'uuid',
    ];
}
