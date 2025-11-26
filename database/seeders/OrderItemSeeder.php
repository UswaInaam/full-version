<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderItem;

class OrderItemSeeder extends Seeder
{
    public function run()
    {
        $items = [

            [
                'order_id'   => 1,
                'product_id' => 1,
                'variant_id' => 2,
                'quantity'   => 2,
                'price'      => '2499.00',
                'subtotal'   => '4998.00',
            ],

            [
                'order_id'   => 1,
                'product_id' => 3,
                'variant_id' => 1,
                'quantity'   => 1,
                'price'      => '1599.00',
                'subtotal'   => '1599.00',
            ],

            [
                'order_id'   => 2,
                'product_id' => 4,
                'variant_id' => 3,
                'quantity'   => 3,
                'price'      => '899.00',
                'subtotal'   => '2697.00',
            ],

            [
                'order_id'   => 3,
                'product_id' => 2,
                'variant_id' => 1,
                'quantity'   => 1,
                'price'      => '3499.00',
                'subtotal'   => '3499.00',
            ],

            [
                'order_id'   => 3,
                'product_id' => 5,
                'variant_id' => 2,
                'quantity'   => 4,
                'price'      => '499.00',
                'subtotal'   => '1996.00',
            ],

            [
                'order_id'   => 4,
                'product_id' => 6,
                'variant_id' => 1,
                'quantity'   => 2,
                'price'      => '1299.00',
                'subtotal'   => '2598.00',
            ],

            [
                'order_id'   => 5,
                'product_id' => 7,
                'variant_id' => 4,
                'quantity'   => 1,
                'price'      => '5999.00',
                'subtotal'   => '5999.00',
            ],

            [
                'order_id'   => 6,
                'product_id' => 8,
                'variant_id' => 2,
                'quantity'   => 2,
                'price'      => '799.00',
                'subtotal'   => '1598.00',
            ],

            [
                'order_id'   => 7,
                'product_id' => 9,
                'variant_id' => 3,
                'quantity'   => 3,
                'price'      => '1200.00',
                'subtotal'   => '3600.00',
            ],

            [
                'order_id'   => 8,
                'product_id' => 10,
                'variant_id' => 1,
                'quantity'   => 1,
                'price'      => '4499.00',
                'subtotal'   => '4499.00',
            ],
        ];

        foreach ($items as $item) {
            OrderItem::create($item);
        }
    }
}
