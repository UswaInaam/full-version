<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\CartSeeder;
use Database\Seeders\CartItemSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\CouponSeeder;
use Database\Seeders\OrderSeeder;
use Database\Seeders\OrderItemSeeder;
use Database\Seeders\PaymentSeeder;
use Database\Seeders\ProductImageSeeder;
use Database\Seeders\ProductVariantSeeder;
use Database\Seeders\ReviewSeeder;
use Database\Seeders\SettingSeeder;
use Database\Seeders\ShippingAddressSeeder;
use Database\Seeders\SubCategorySeeder;
use Database\Seeders\WishlistSeeder;
use Database\Seeders\CustomerSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ProductSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(CartItemSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CouponSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderItemSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(ProductImageSeeder::class);
        $this->call(ProductVariantSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(ShippingAddressSeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(WishlistSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(UserSeeder::class);

    }
}
