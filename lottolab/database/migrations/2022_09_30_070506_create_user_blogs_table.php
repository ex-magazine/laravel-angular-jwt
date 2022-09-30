<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('ip')->nullable();
            $table->unsignedBigInteger('blog_id');
            $table->boolean('status')->default(1);
            $table->timestamps();
            
            $table->foreign('blog_id', 'user_blogs_blog_id_foreign')->references('id')->on('blogs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_blogs');
    }
}
