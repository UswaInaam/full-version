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
}
