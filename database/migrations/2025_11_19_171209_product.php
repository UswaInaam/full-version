<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("category_id")->nullable();
            $table->unsignedBigInteger("subcategory_id")->nullable();
            $table->string("name");
            $table->string("slug")->unique();
            $table->string("sku")->unique();

            $table->decimal("price", 10, 2);
            $table->text("discount_price");
            $table->integer("stock")->default(0);
            $table->text("short_description")->nullable();
            $table->text("long_description")->nullable();
            $table->boolean("status")->default(true);
            $table->boolean("featured")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_products');
    }
};
