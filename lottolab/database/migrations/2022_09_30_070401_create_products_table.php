<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('name', 191);
            $table->string('slug', 191);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('type_id');
            $table->double('price', 8, 2)->default(0.00);
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->double('sale_price', 8, 2)->nullable();
            $table->string('sku', 191)->nullable();
            $table->integer('quantity')->default(0);
            $table->boolean('in_stock')->default(1);
            $table->boolean('is_taxable')->default(0);
            $table->unsignedBigInteger('shipping_class_id')->nullable();
            $table->enum('status', ['publish', 'draft'])->default('publish');
            $table->enum('product_type', ['simple', 'variable'])->default('simple');
            $table->string('unit', 191);
            $table->string('height', 191)->nullable();
            $table->string('width', 191)->nullable();
            $table->string('length', 191)->nullable();
            $table->longText('image')->nullable();
            $table->longText('gallery')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
            $table->double('max_price', 8, 2)->nullable();
            $table->double('min_price', 8, 2)->nullable();
            
            $table->foreign('shipping_class_id', 'products_shipping_class_id_foreign')->references('id')->on('shipping_classes');
            $table->foreign('shop_id', 'products_shop_id_foreign')->references('id')->on('shops')->onDelete('cascade');
            $table->foreign('type_id', 'products_type_id_foreign')->references('id')->on('types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
