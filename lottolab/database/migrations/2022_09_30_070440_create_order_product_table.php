<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('variation_option_id')->nullable();
            $table->string('order_quantity', 191);
            $table->string('unit_price', 191);
            $table->string('subtotal', 191);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
            
            $table->foreign('order_id', 'order_product_order_id_foreign')->references('id')->on('orders');
            $table->foreign('product_id', 'order_product_product_id_foreign')->references('id')->on('products');
            $table->foreign('variation_option_id', 'order_product_variation_option_id_foreign')->references('id')->on('variation_options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
}
