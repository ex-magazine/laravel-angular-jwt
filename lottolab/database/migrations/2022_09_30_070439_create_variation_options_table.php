<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariationOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variation_options', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('title', 191);
            $table->string('price', 191);
            $table->string('sale_price', 191)->nullable();
            $table->string('quantity', 191);
            $table->boolean('is_disable')->default(0);
            $table->string('sku', 191)->nullable();
            $table->longText('options');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->timestamps();
            
            $table->foreign('product_id', 'variation_options_product_id_foreign')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variation_options');
    }
}
