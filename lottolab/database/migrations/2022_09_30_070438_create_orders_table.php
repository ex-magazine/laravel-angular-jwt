<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('tracking_number', 191)->unique('orders_tracking_number_unique');
            $table->unsignedBigInteger('customer_id');
            $table->string('customer_contact', 191);
            $table->unsignedBigInteger('status');
            $table->double('amount');
            $table->double('sales_tax')->nullable();
            $table->double('paid_total')->nullable();
            $table->double('total')->nullable();
            $table->unsignedBigInteger('coupon_id')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->double('discount')->nullable();
            $table->string('payment_id', 191)->nullable();
            $table->string('payment_gateway', 191)->nullable();
            $table->longText('shipping_address')->nullable();
            $table->longText('billing_address')->nullable();
            $table->unsignedBigInteger('logistics_provider')->nullable();
            $table->double('delivery_fee')->nullable();
            $table->string('delivery_time', 191)->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
            
            $table->foreign('customer_id', 'orders_customer_id_foreign')->references('id')->on('users');
            $table->foreign('shop_id', 'orders_shop_id_foreign')->references('id')->on('shops')->onDelete('cascade');
            $table->foreign('status', 'orders_status_foreign')->references('id')->on('order_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
