<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_classes', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('name', 191);
            $table->double('amount');
            $table->string('is_global', 191)->default('1');
            $table->enum('type', ['fixed', 'percentage', 'free_shipping'])->default('fixed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipping_classes');
    }
}
