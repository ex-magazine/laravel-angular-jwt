<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_product', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('attribute_value_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();
            
            $table->foreign('attribute_value_id', 'attribute_product_attribute_value_id_foreign')->references('id')->on('attribute_values')->onDelete('cascade');
            $table->foreign('product_id', 'attribute_product_product_id_foreign')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribute_product');
    }
}
