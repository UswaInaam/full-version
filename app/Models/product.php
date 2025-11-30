<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'sub_category_id',
        'name',
        'slug',
        'sku',
        'price',
        'discount_price',
        'stock',
        'short_description',
        'long_description',
        'status',
        'featured',
    ];

    protected $casts = [
        'category_id'     => 'integer',
        'sub_category_id' => 'integer',

        'price'           => 'decimal:2',
        'discount_price'  => 'decimal:2',

        'stock'           => 'integer',

        'name'            => 'string',
        'slug'            => 'string',
        'sku'             => 'string',

        'short_description' => 'string',
        'long_description'  => 'string',

        'status'          => 'boolean',   // active/inactive
        'featured'        => 'boolean',   // 1 or 0
    ];

    public function category() {

        return $this->belongsTo(Category::class);
        

    }

    public function subcategory() {
        return $this->belongsTo(SubCategory::class);
    }

    public function images() {
        return $this->hasMany(ProductImage::class);
    }

    public function variants() {
        return $this->hasMany(ProductVariant::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function cartItems() {
        return $this->hasMany(CartItem::class);
    }

    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }
}


