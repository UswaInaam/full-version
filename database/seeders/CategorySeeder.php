<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name'        => 'Electronics',
                'slug'        => Str::slug('Electronics'),
                'description' => 'Electronic gadgets and accessories.',
                'status'      => true,
                'image'       => 'electronics.jpg',
            ],
            [
                'name'        => 'Fashion',
                'slug'        => Str::slug('Fashion'),
                'description' => 'Clothing and fashion items.',
                'status'      => true,
                'image'       => 'fashion.jpg',
            ],
            [
                'name'        => 'Home & Living',
                'slug'        => Str::slug('Home & Living'),
                'description' => 'Furniture and household products.',
                'status'      => true,
                'image'       => 'home-living.jpg',
            ],
            [
                'name'        => 'Beauty & Health',
                'slug'        => Str::slug('Beauty & Health'),
                'description' => 'Cosmetics and health-related items.',
                'status'      => true,
                'image'       => 'beauty-health.jpg',
            ],
            [
                'name'        => 'Sports & Outdoor',
                'slug'        => Str::slug('Sports & Outdoor'),
                'description' => 'Sports gear and outdoor accessories.',
                'status'      => true,
                'image'       => 'sports-outdoor.jpg',
            ],
            [
                'name'        => 'Automobile',
                'slug'        => Str::slug('Automobile'),
                'description' => 'Car accessories and auto parts.',
                'status'      => true,
                'image'       => 'automobile.jpg',
            ],
            [
                'name'        => 'Mobile & Tablets',
                'slug'        => Str::slug('Mobile & Tablets'),
                'description' => 'Smartphones, tablets, and gadgets.',
                'status'      => true,
                'image'       => 'mobile-tablets.jpg',
            ],
            [
                'name'        => 'Groceries',
                'slug'        => Str::slug('Groceries'),
                'description' => 'Daily grocery and household supplies.',
                'status'      => true,
                'image'       => 'groceries.jpg',
            ],
            [
                'name'        => 'Books',
                'slug'        => Str::slug('Books'),
                'description' => 'Educational and fictional books.',
                'status'      => true,
                'image'       => 'books.jpg',
            ],
            [
                'name'        => 'Toys & Kids',
                'slug'        => Str::slug('Toys & Kids'),
                'description' => 'Kids toys and baby care products.',
                'status'      => true,
                'image'       => 'toys-kids.jpg',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
