<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_classes', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('country', 191)->nullable();
            $table->string('state', 191)->nullable();
            $table->string('zip', 191)->nullable();
            $table->string('city', 191)->nullable();
            $table->double('rate');
            $table->string('name', 191)->nullable();
            $table->integer('is_global')->nullable();
            $table->integer('priority')->nullable();
            $table->boolean('on_shipping')->default(1);
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
        Schema::dropIfExists('tax_classes');
    }
}
