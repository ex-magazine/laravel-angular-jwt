<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('title', 191);
            $table->string('type', 191);
            $table->boolean('default')->default(0);
            $table->longText('address');
            $table->unsignedBigInteger('customer_id');
            $table->timestamps();
            
            $table->foreign('customer_id', 'address_customer_id_foreign')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}
