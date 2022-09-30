<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('name', 191);
            $table->string('slug', 191);
            $table->string('icon', 191)->nullable();
            $table->longText('image')->nullable();
            $table->text('details')->nullable();
            $table->unsignedBigInteger('type_id');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            
            $table->foreign('type_id', 'tags_type_id_foreign')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
