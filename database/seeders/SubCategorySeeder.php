<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $subCategories = [
            [
                'category_id' => 1,
                'name'        => 'Wireless Headphones',
                'slug'        => Str::slug('Wireless Headphones'),
                'description' => 'High quality wireless Bluetooth headphones with noise cancellation.',
                'status'      => true,
                'image'       => 'sub_categories/wireless_headphones.jpg',
            ],
            [
                'category_id' => 1,
                'name'        => 'Gaming Headsets',
                'slug'        => Str::slug('Gaming Headsets'),
                'description' => 'Comfortable gaming headsets with surround sound.',
                'status'      => true,
                'image'       => 'sub_categories/gaming_headsets.jpg',
            ],
            [
                'category_id' => 2,
                'name'        => 'Smart Watches',
                'slug'        => Str::slug('Smart Watches'),
                'description' => 'Latest smart watches with multiple health tracking features.',
                'status'      => true,
                'image'       => 'sub_categories/smart_watches.jpg',
            ],
            [
                'category_id' => 2,
                'name'        => 'Fitness Bands',
                'slug'        => Str::slug('Fitness Bands'),
                'description' => 'Affordable fitness bands with heart rate monitoring.',
                'status'      => true,
                'image'       => 'sub_categories/fitness_bands.jpg',
            ],
            [
                'category_id' => 3,
                'name'        => 'Power Banks',
                'slug'        => Str::slug('Power Banks'),
                'description' => 'Portable power banks with fast charging capability.',
                'status'      => true,
                'image'       => 'sub_categories/power_banks.jpg',
            ],
            [
                'category_id' => 3,
                'name'        => 'Chargers & Cables',
                'slug'        => Str::slug('Chargers & Cables'),
                'description' => 'High quality USB-C and lightning cables.',
                'status'      => true,
                'image'       => 'sub_categories/chargers_cables.jpg',
            ],
            [
                'category_id' => 4,
                'name'        => 'Bluetooth Speakers',
                'slug'        => Str::slug('Bluetooth Speakers'),
                'description' => 'Portable Bluetooth speakers with excellent sound quality.',
                'status'      => true,
                'image'       => 'sub_categories/bluetooth_speakers.jpg',
            ],
            [
                'category_id' => 4,
                'name'        => 'LED Lamps',
                'slug'        => Str::slug('LED Lamps'),
                'description' => 'Energy-saving LED lamps for home and office.',
                'status'      => true,
                'image'       => 'sub_categories/led_lamps.jpg',
            ],
            [
                'category_id' => 5,
                'name'        => 'Tripods & Mounts',
                'slug'        => Str::slug('Tripods & Mounts'),
                'description' => 'Durable tripods and mounts for cameras and smartphones.',
                'status'      => true,
                'image'       => 'sub_categories/tripods_mounts.jpg',
            ],
            [
                'category_id' => 5,
                'name'        => 'Camera Accessories',
                'slug'        => Str::slug('Camera Accessories'),
                'description' => 'Various accessories for cameras including bags, lenses, and cleaners.',
                'status'      => true,
                'image'       => 'sub_categories/camera_accessories.jpg',
            ],
        ];

        foreach ($subCategories as $subCategory) {
            SubCategory::create($subCategory);
        }
    }
}
