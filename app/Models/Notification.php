<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $table = 'ticket';
    protected $fillable = [
        'user_id',
        'message',
        'see',
        'deleted_at'
    ];
}
