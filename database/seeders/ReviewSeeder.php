<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $reviews = [
            [
                'user_id'    => 1,
                'product_id' => 1,
                'rating'     => 5,
                'comment'    => 'Excellent wireless headphones! Clear sound and long battery life.',
                'status'     => 'approved',
            ],
            [
                'user_id'    => 2,
                'product_id' => 2,
                'rating'     => 4,
                'comment'    => 'Smart watch works well, but the strap could be more comfortable.',
                'status'     => 'approved',
            ],
            [
                'user_id'    => 3,
                'product_id' => 3,
                'rating'     => 5,
                'comment'    => 'Power bank charges quickly and lasts long. Very satisfied.',
                'status'     => 'approved',
            ],
            [
                'user_id'    => 4,
                'product_id' => 4,
                'rating'     => 3,
                'comment'    => 'Bluetooth speaker has good sound, but battery drains fast.',
                'status'     => 'pending',
            ],
            [
                'user_id'    => 5,
                'product_id' => 5,
                'rating'     => 4,
                'comment'    => 'LED desk lamp brightens the room nicely, adjustable brightness is great.',
                'status'     => 'approved',
            ],
            [
                'user_id'    => 1,
                'product_id' => 6,
                'rating'     => 5,
                'comment'    => 'Gaming headset is comfortable and noise cancellation works perfectly.',
                'status'     => 'approved',
            ],
            [
                'user_id'    => 2,
                'product_id' => 7,
                'rating'     => 4,
                'comment'    => 'USB-C cable is sturdy and fast charging works well.',
                'status'     => 'approved',
            ],
            [
                'user_id'    => 3,
                'product_id' => 8,
                'rating'     => 5,
                'comment'    => 'Tripod is very stable and height adjustment is smooth.',
                'status'     => 'approved',
            ],
            [
                'user_id'    => 4,
                'product_id' => 9,
                'rating'     => 4,
                'comment'    => 'Portable vacuum is lightweight and cleans efficiently.',
                'status'     => 'pending',
            ],
            [
                'user_id'    => 5,
                'product_id' => 10,
                'rating'     => 5,
                'comment'    => 'Great quality product, works exactly as described.',
                'status'     => 'approved',
            ],
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
