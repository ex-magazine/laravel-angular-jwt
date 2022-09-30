<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('owner_id');
            $table->string('name', 191)->nullable();
            $table->string('slug', 191)->nullable();
            $table->text('description')->nullable();
            $table->longText('cover_image')->nullable();
            $table->longText('logo')->nullable();
            $table->boolean('is_active')->default(0);
            $table->longText('address')->nullable();
            $table->longText('settings')->nullable();
            $table->timestamps();
            
            $table->foreign('owner_id', 'shops_owner_id_foreign')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
