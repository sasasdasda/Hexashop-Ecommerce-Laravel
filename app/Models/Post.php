<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $table = 'posts';
    public $timestamp = true;
    protected $fillable = [
        'id',
        'title',
        'body',
        'category_id',
        'created_at',
        'updated_at',
    ];
    protected $hidden = ['created_at', 'updated_at'];
}
