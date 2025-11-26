<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CartItem;

class CartItemSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'cart_id'    => 1,
                'product_id' => 1,
                'variant_id' => null,
                'quantity'   => 2,
                'price'      => 2500.00,
                'subtotal'   => 5000.00,
            ],
            [
                'cart_id'    => 1,
                'product_id' => 3,
                'variant_id' => null,
                'quantity'   => 1,
                'price'      => 1200.00,
                'subtotal'   => 1200.00,
            ],
            [
                'cart_id'    => 2,
                'product_id' => 5,
                'variant_id' => null,
                'quantity'   => 3,
                'price'      => 900.00,
                'subtotal'   => 2700.00,
            ],
            [
                'cart_id'    => 2,
                'product_id' => 2,
                'variant_id' => null,
                'quantity'   => 1,
                'price'      => 2500.00,
                'subtotal'   => 2500.00,
            ],
            [
                'cart_id'    => 3,
                'product_id' => 4,
                'variant_id' => 1,   // Optional variant
                'quantity'   => 1,
                'price'      => 3500.00,
                'subtotal'   => 3500.00,
            ],
            [
                'cart_id'    => 3,
                'product_id' => 8,
                'variant_id' => null,
                'quantity'   => 2,
                'price'      => 5200.00,
                'subtotal'   => 10400.00,
            ],
            [
                'cart_id'    => 4,
                'product_id' => 6,
                'variant_id' => null,
                'quantity'   => 1,
                'price'      => 1800.00,
                'subtotal'   => 1800.00,
            ],
            [
                'cart_id'    => 4,
                'product_id' => 1,
                'variant_id' => null,
                'quantity'   => 1,
                'price'      => 5500.00,
                'subtotal'   => 5500.00,
            ],
            [
                'cart_id'    => 5,
                'product_id' => 7,
                'variant_id' => null,
                'quantity'   => 1,
                'price'      => 6000.00,
                'subtotal'   => 6000.00,
            ],
            [
                'cart_id'    => 5,
                'product_id' => 9,
                'variant_id' => null,
                'quantity'   => 1,
                'price'      => 8500.00,
                'subtotal'   => 8500.00,
            ],
        ];

        foreach ($items as $item) {
            CartItem::create($item);
        }
    }
}
