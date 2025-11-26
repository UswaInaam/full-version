<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;
use Illuminate\Support\Str;

class PaymentSeeder extends Seeder
{
    public function run()
    {
        $paymentMethods = ['credit_card', 'paypal', 'bank_transfer', 'cod'];
        $statuses = ['pending', 'paid', 'failed'];

        $payments = [
            [
                'order_id'       => 1,
                'payment_method' => 'credit_card',
                'transaction_id' => Str::upper(Str::random(12)),
                'amount'         => '6597.00',
                'status'         => 'paid',
            ],
            [
                'order_id'       => 2,
                'payment_method' => 'paypal',
                'transaction_id' => Str::upper(Str::random(12)),
                'amount'         => '2697.00',
                'status'         => 'paid',
            ],
            [
                'order_id'       => 3,
                'payment_method' => 'bank_transfer',
                'transaction_id' => Str::upper(Str::random(12)),
                'amount'         => '5095.00',
                'status'         => 'pending',
            ],
            [
                'order_id'       => 4,
                'payment_method' => 'credit_card',
                'transaction_id' => Str::upper(Str::random(12)),
                'amount'         => '2598.00',
                'status'         => 'paid',
            ],
            [
                'order_id'       => 5,
                'payment_method' => 'paypal',
                'transaction_id' => Str::upper(Str::random(12)),
                'amount'         => '5999.00',
                'status'         => 'failed',
            ],
            [
                'order_id'       => 6,
                'payment_method' => 'cod',
                'transaction_id' => Str::upper(Str::random(12)),
                'amount'         => '1598.00',
                'status'         => 'pending',
            ],
            [
                'order_id'       => 7,
                'payment_method' => 'credit_card',
                'transaction_id' => Str::upper(Str::random(12)),
                'amount'         => '3600.00',
                'status'         => 'paid',
            ],
            [
                'order_id'       => 8,
                'payment_method' => 'paypal',
                'transaction_id' => Str::upper(Str::random(12)),
                'amount'         => '4499.00',
                'status'         => 'paid',
            ],
            [
                'order_id'       => 9,
                'payment_method' => 'bank_transfer',
                'transaction_id' => Str::upper(Str::random(12)),
                'amount'         => '7000.00',
                'status'         => 'pending',
            ],
            [
                'order_id'       => 10,
                'payment_method' => 'credit_card',
                'transaction_id' => Str::upper(Str::random(12)),
                'amount'         => '1200.00',
                'status'         => 'paid',
            ],
        ];

        foreach ($payments as $payment) {
            Payment::create($payment);
        }
    }
}
