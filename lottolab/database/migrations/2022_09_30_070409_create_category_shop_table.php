<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_shop', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('shop_id');
            $table->unsignedBigInteger('category_id');
            
            $table->foreign('category_id', 'category_shop_category_id_foreign')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('shop_id', 'category_shop_shop_id_foreign')->references('id')->on('shops')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_shop');
    }
}
