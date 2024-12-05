<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = [
        'product_id',
        'product_uuid',
        'vendor_id',
        'costumer_id',
        'notes',
        'address',
        'towncity',
        'postcode',
        'quantity',
        'status',
        'uuid',
        'user_id',
    ];
    use HasFactory;
}
