<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
        'code',
        'discount_type',
        'discount_value',
        'start_date',
        'end_date',
        'min_order_amount',
        'max_uses',
        'status',
    ];

    protected $casts = [
        'code'             => 'string',
        'discount_type'    => 'string',

        'discount_value'   => 'decimal:2',   // money OR percentage value
        'min_order_amount' => 'decimal:2',   // minimum order amount

        'max_uses'         => 'integer',     // total allowed uses

        'start_date'       => 'datetime',
        'end_date'         => 'datetime',

        'status'           => 'boolean',     // active / inactive
    ];
}
