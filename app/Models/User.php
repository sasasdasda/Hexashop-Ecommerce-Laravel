<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use App\Models\UserDetails;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Cart;
use Tymon\JWTAuth\Contracts\JWTSubject;
// Payments
use Laravel\Paddle\Billable;
class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $table = ['users'];
    public $timestamps = true;
    protected $fillable = [
        'firstname',
        'lastname',
        'name',
        'username',
        'email',
        'password',
        'uuid',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    protected function Password(): Attribute
    {
        return Attribute::make(
            set: fn($value)=> Hash::make($value),
        );
    }
    // protected function Firstname(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn($value)=> ucfirst($value)
    //     );
    // }
    // protected function Lastname():Attribute
    // {
    //     return Attribute::make(
    //         get: fn($value)=>ucfirst($value[0])
    //     );
    // }
    // Relation

    public function user_details()
    {
        return $this->hasOne(UserDetails::class);
    }

    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function cart(): HasMany{
        return $this->hasMany(Cart::class);
    }


    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }


}
