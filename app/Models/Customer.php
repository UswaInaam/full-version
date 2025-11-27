<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profile_picture',
        'email',
        'phone',
        'gender',
        'profession',
        'status',
        'address',
    ];

    protected $casts = [
        'name'            => 'string',
        'profile_picture' => 'string',
        'email'           => 'string',
        'phone'           => 'string',
        'gender'          => 'string',
        'profession'      => 'string',
        'address'         => 'string',
        'status'          => 'string', // active / inactive
    ];

    public function carts() {
        return $this->hasMany(Cart::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function addresses() {
        return $this->hasMany(ShippingAddress::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function wishlist() {
        return $this->hasOne(Wishlist::class);
    }


}
