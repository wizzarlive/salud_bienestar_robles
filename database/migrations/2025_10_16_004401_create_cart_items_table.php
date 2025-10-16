<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'product_id')->constrained('products');
            $table->foreignId(column: 'cart_id')->constrained('carts');
            $table->integer('quantity')->default(1);
            $table->decimal('price_snapshot', 8, 2);
            $table->decimal('subtotal', 10, 2);
            $table->string('product_name_snapshot');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
