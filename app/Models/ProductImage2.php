<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage2 extends Model
{
    protected $table = 'product_image';
    protected $fillable = [
        'image',
        'product_id',
    ];
    use HasFactory;
}
