<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('slug', 191);
            $table->string('name', 191);
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->timestamps();
            
            $table->foreign('shop_id', 'attributes_shop_id_foreign')->references('id')->on('shops')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributes');
    }
}
