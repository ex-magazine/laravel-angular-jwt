<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('model_type', 191);
            $table->unsignedBigInteger('model_id');
            $table->uuid('uuid')->nullable();
            $table->string('collection_name', 191);
            $table->string('name', 191);
            $table->string('file_name', 191);
            $table->string('mime_type', 191)->nullable();
            $table->string('disk', 191);
            $table->string('conversions_disk', 191)->nullable();
            $table->unsignedBigInteger('size');
            $table->longText('manipulations');
            $table->longText('generated_conversions');
            $table->longText('custom_properties');
            $table->longText('responsive_images');
            $table->unsignedInteger('order_column')->nullable();
            $table->timestamps();
            
            $table->index(['model_type', 'model_id'], 'media_model_type_model_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
