<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coupon;
use Carbon\Carbon;

class CouponSeeder extends Seeder
{
    public function run()
    {
        $coupons = [
            [
                'code'             => 'WELCOME10',
                'discount_type'    => 'percentage',
                'discount_value'   => 10.00,
                'start_date'       => Carbon::now(),
                'end_date'         => Carbon::now()->addMonths(2),
                'min_order_amount' => 1000.00,
                'max_uses'         => 100,
                'status'           => true,
            ],
            [
                'code'             => 'FLAT500',
                'discount_type'    => 'fixed',
                'discount_value'   => 500.00,
                'start_date'       => Carbon::now(),
                'end_date'         => Carbon::now()->addMonth(),
                'min_order_amount' => 2000.00,
                'max_uses'         => 50,
                'status'           => true,
            ],
            [
                'code'             => 'SALE20',
                'discount_type'    => 'percentage',
                'discount_value'   => 20.00,
                'start_date'       => Carbon::now(),
                'end_date'         => Carbon::now()->addDays(20),
                'min_order_amount' => 1500.00,
                'max_uses'         => 200,
                'status'           => true,
            ],
            [
                'code'             => 'NEWYEAR25',
                'discount_type'    => 'percentage',
                'discount_value'   => 25.00,
                'start_date'       => Carbon::now(),
                'end_date'         => Carbon::now()->addMonths(3),
                'min_order_amount' => 3000.00,
                'max_uses'         => 300,
                'status'           => true,
            ],
            [
                'code'             => 'FIRSTBUY1000',
                'discount_type'    => 'fixed',
                'discount_value'   => 1000.00,
                'start_date'       => Carbon::now(),
                'end_date'         => Carbon::now()->addMonth(),
                'min_order_amount' => 5000.00,
                'max_uses'         => 80,
                'status'           => true,
            ],
            [
                'code'             => 'FREESHIP',
                'discount_type'    => 'fixed',
                'discount_value'   => 200.00, // shipping discount idea
                'start_date'       => Carbon::now(),
                'end_date'         => Carbon::now()->addMonths(6),
                'min_order_amount' => 0,
                'max_uses'         => 500,
                'status'           => true,
            ],
            [
                'code'             => 'MEGA50',
                'discount_type'    => 'percentage',
                'discount_value'   => 50.00,
                'start_date'       => Carbon::now(),
                'end_date'         => Carbon::now()->addDays(10),
                'min_order_amount' => 4000.00,
                'max_uses'         => 20,
                'status'           => false, // inactive coupon
            ],
            [
                'code'             => 'SHOPMORE300',
                'discount_type'    => 'fixed',
                'discount_value'   => 300.00,
                'start_date'       => Carbon::now(),
                'end_date'         => Carbon::now()->addMonths(4),
                'min_order_amount' => 2500.00,
                'max_uses'         => 150,
                'status'           => true,
            ],
            [
                'code'             => 'BIGDEAL15',
                'discount_type'    => 'percentage',
                'discount_value'   => 15.00,
                'start_date'       => Carbon::now(),
                'end_date'         => Carbon::now()->addMonth(),
                'min_order_amount' => 1000.00,
                'max_uses'         => 120,
                'status'           => true,
            ],
            [
                'code'             => 'LIMITED700',
                'discount_type'    => 'fixed',
                'discount_value'   => 700.00,
                'start_date'       => Carbon::now(),
                'end_date'         => Carbon::now()->addDays(15),
                'min_order_amount' => 3500.00,
                'max_uses'         => 40,
                'status'           => true,
            ],
        ];

        foreach ($coupons as $coupon) {
            Coupon::create($coupon);
        }
    }
}
