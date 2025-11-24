<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $fillable = [
        'product_id',
        'attribute',        // e.g., 'Size'
        'value',            // e.g., 'Large'
        'price_adjustment', // numeric adjustment
        'stock',
    ];

    protected $casts = [
        'product_id'       => 'integer',
        'stock'            => 'integer',

        'attribute'        => 'string',
        'value'            => 'string',
        'price_adjustment' => 'decimal:2',
    ];
}
