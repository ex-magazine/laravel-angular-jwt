<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('code', 191);
            $table->text('description')->nullable();
            $table->longText('image')->nullable();
            $table->enum('type', ['fixed', 'percentage', 'free_shipping'])->default('fixed');
            $table->double('amount', 8, 2)->default(0.00);
            $table->string('active_from', 191);
            $table->string('expire_at', 191);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
