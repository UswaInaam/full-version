<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'order_number',
        'total_amount',
        'discount',
        'shipping_cost',
        'payment_status',
        'order_status',
        'shipping_address_id',
        'payment_method',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'shipping_address_id' => 'integer',

        'total_amount' => 'decimal:2',
        'discount' => 'decimal:2',
        'shipping_cost' => 'decimal:2',

        'payment_status' => 'string',
        'order_status' => 'string',
        'order_number' => 'string',
        'payment_method' => 'string',
    ];
}
