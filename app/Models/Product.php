<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\ProductImage2;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    // protected $timestamps = True;
    protected $fillable = [
        'id',
        'name',
        'category_id',
        'user_id',
        'description',
        'created_at',
        'updated_at',
        'price',
        'image',
        'approve',
        'uuid'
    ];
    protected $hidden = ['created_at','updated_at','id'];
    // public function category(){
    //     return $this->hasOne(Category::class,'category_id');
    // }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function image2(): HasOne
    {
        return $this->hasOne(ProductImage2::class);
    }
}
