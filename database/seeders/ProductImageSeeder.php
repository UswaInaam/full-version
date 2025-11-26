<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductImage;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $images = [
            [
                'product_id' => 1,
                'image_path' => 'products/wireless_headphones_1.jpg',
                'alt_text'   => 'Wireless Bluetooth Headphones - Black',
            ],
            [
                'product_id' => 1,
                'image_path' => 'products/wireless_headphones_2.jpg',
                'alt_text'   => 'Wireless Bluetooth Headphones - Side View',
            ],
            [
                'product_id' => 2,
                'image_path' => 'products/smart_watch_1.jpg',
                'alt_text'   => 'Smart Watch with Leather Strap',
            ],
            [
                'product_id' => 3,
                'image_path' => 'products/power_bank_1.jpg',
                'alt_text'   => 'Portable Power Bank 10000mAh',
            ],
            [
                'product_id' => 4,
                'image_path' => 'products/bluetooth_speaker_1.jpg',
                'alt_text'   => 'Compact Bluetooth Speaker - Red',
            ],
            [
                'product_id' => 5,
                'image_path' => 'products/led_lamp_1.jpg',
                'alt_text'   => 'LED Desk Lamp with Adjustable Brightness',
            ],
            [
                'product_id' => 6,
                'image_path' => 'products/gaming_headset_1.jpg',
                'alt_text'   => 'Gaming Headset with Noise Cancellation',
            ],
            [
                'product_id' => 7,
                'image_path' => 'products/usb_cable_1.jpg',
                'alt_text'   => 'USB-C Fast Charging Cable',
            ],
            [
                'product_id' => 8,
                'image_path' => 'products/tripod_1.jpg',
                'alt_text'   => 'Adjustable Tripod for Camera & Mobile',
            ],
            [
                'product_id' => 9,
                'image_path' => 'products/portable_vacuum_1.jpg',
                'alt_text'   => 'Portable Handheld Vacuum Cleaner',
            ],
        ];

        foreach ($images as $image) {
            ProductImage::create($image);
        }
    }
}
