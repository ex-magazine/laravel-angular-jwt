<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug', 191)->nullable();
            $table->string('icon', 191)->nullable();
            $table->text('description')->nullable();
            $table->longText('image')->nullable();
            $table->text('details')->nullable();
            $table->unsignedBigInteger('parent')->nullable();
            $table->unsignedBigInteger('type_id')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            
            $table->foreign('type_id', 'categories_type_id_foreign')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
