<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paymentStatuses = ['pending', 'paid', 'failed'];
        $orderStatuses   = ['pending', 'processing', 'shipped', 'delivered', 'cancelled'];
        $paymentMethods  = ['cod', 'credit_card', 'paypal', 'bank_transfer'];

        for ($i = 1; $i <= 10; $i++) {
            Order::create([
                'user_id'             => rand(1, 5), // random existing users
                'order_number'        => 'ORD-' . Str::upper(Str::random(8)),
                'total_amount'        => rand(1000, 10000),
                'discount'            => rand(0, 500),
                'shipping_cost'       => rand(100, 300),
                'payment_status'      => $paymentStatuses[array_rand($paymentStatuses)],
                'order_status'        => $orderStatuses[array_rand($orderStatuses)],
                'shipping_address_id' => rand(1, 5), // must exist in DB
                'payment_method'      => $paymentMethods[array_rand($paymentMethods)],
            ]);
        }
    }
}
