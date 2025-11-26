<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;
use Illuminate\Support\Str;

class CartSeeder extends Seeder
{
    public function run()
    {
        $carts = [
            [
                'user_id'    => 1,
                'session_id' => null,
                'total'      => 2500.00,
            ],
            [
                'user_id'    => 2,
                'session_id' => null,
                'total'      => 4800.50,
            ],
            [
                'user_id'    => null,
                'session_id' => Str::uuid(),
                'total'      => 1200.00,
            ],
            [
                'user_id'    => null,
                'session_id' => Str::uuid(),
                'total'      => 3500.75,
            ],
            [
                'user_id'    => 3,
                'session_id' => null,
                'total'      => 999.99,
            ],
            [
                'user_id'    => null,
                'session_id' => Str::uuid(),
                'total'      => 1800.00,
            ],
            [
                'user_id'    => 4,
                'session_id' => null,
                'total'      => 5600.25,
            ],
            [
                'user_id'    => null,
                'session_id' => Str::uuid(),
                'total'      => 700.00,
            ],
            [
                'user_id'    => 5,
                'session_id' => null,
                'total'      => 350.50,
            ],
            [
                'user_id'    => null,
                'session_id' => Str::uuid(),
                'total'      => 4300.10,
            ],
        ];

        foreach ($carts as $cart) {
            Cart::create($cart);
        }
    }
}
