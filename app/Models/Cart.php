<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'session_id',
        'total',
    ];

    protected $casts = [
        'user_id' => 'integer',      // FK
        'session_id' => 'string',    // session ID always string
        'total' => 'decimal:2',      // cart total should be money
    ];
}
