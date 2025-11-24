<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'order_id',
        'payment_method',
        'transaction_id',
        'amount',
        'status',
    ];

    protected $casts = [
        'order_id'        => 'integer',

        'payment_method'  => 'string',
        'transaction_id'  => 'string',
        'status'          => 'string',     // e.g. pending / paid / failed

        'amount'          => 'decimal:2',  // payment amount
    ];
}
