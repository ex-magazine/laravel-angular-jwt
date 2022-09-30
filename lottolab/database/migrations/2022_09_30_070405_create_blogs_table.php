<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');
            $table->string('title')->nullable();
            $table->string('slug', 180)->nullable()->unique('blogs_slug_unique');
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
            
            $table->foreign('category_id', 'blogs_category_id_foreign')->references('id')->on('blog_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id', 'blogs_user_id_foreign')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
