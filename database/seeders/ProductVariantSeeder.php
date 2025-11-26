<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductVariant;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $variants = [
            [
                'product_id'       => 1,
                'attribute'        => 'Color',
                'value'            => 'Black',
                'price_adjustment' => 0.00,
                'stock'            => 20,
            ],
            [
                'product_id'       => 1,
                'attribute'        => 'Color',
                'value'            => 'White',
                'price_adjustment' => 100.00,
                'stock'            => 15,
            ],
            [
                'product_id'       => 2,
                'attribute'        => 'Size',
                'value'            => 'Small',
                'price_adjustment' => 0.00,
                'stock'            => 10,
            ],
            [
                'product_id'       => 2,
                'attribute'        => 'Size',
                'value'            => 'Large',
                'price_adjustment' => 200.00,
                'stock'            => 8,
            ],
            [
                'product_id'       => 3,
                'attribute'        => 'Capacity',
                'value'            => '10000mAh',
                'price_adjustment' => 0.00,
                'stock'            => 25,
            ],
            [
                'product_id'       => 3,
                'attribute'        => 'Capacity',
                'value'            => '20000mAh',
                'price_adjustment' => 500.00,
                'stock'            => 12,
            ],
            [
                'product_id'       => 4,
                'attribute'        => 'Color',
                'value'            => 'Red',
                'price_adjustment' => 0.00,
                'stock'            => 18,
            ],
            [
                'product_id'       => 4,
                'attribute'        => 'Color',
                'value'            => 'Blue',
                'price_adjustment' => 0.00,
                'stock'            => 22,
            ],
            [
                'product_id'       => 5,
                'attribute'        => 'Type',
                'value'            => 'LED',
                'price_adjustment' => 0.00,
                'stock'            => 30,
            ],
            [
                'product_id'       => 5,
                'attribute'        => 'Type',
                'value'            => 'CFL',
                'price_adjustment' => -50.00,
                'stock'            => 20,
            ],
        ];

        foreach ($variants as $variant) {
            ProductVariant::create($variant);
        }
    }
}
