<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatewaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gateways', function (Blueprint $table) {
            $table->id();
            $table->integer('code')->nullable();
            $table->string('name', 40);
            $table->string('alias', 40)->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(1)->comment("1=>enable, 2=>disable");
            $table->text('gateway_parameters')->nullable();
            $table->text('supported_currencies')->nullable();
            $table->boolean('crypto')->default(0)->comment("0: fiat currency, 1: crypto currency");
            $table->text('extra')->nullable();
            $table->text('description')->nullable();
            $table->text('input_form')->nullable();
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
        Schema::dropIfExists('gateways');
    }
}
