<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
// use App\Models\Product;


class Cart extends Model
{
    protected $table = 'cart';
    protected $fillable = [
        'vendor_id',
        'user_id',
        'product_id',
        'order_id',
        'quantity',
        'total_price',
    ];
    use HasFactory;
    function user(): BelongsTo{
        return $this->belongsTo(User::class,'user_id');
    }
    function product(): BelongsTo{
        return $this->belongsTo(Product::class);
    }
}
