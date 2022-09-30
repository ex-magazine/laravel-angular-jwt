<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->longText('avatar')->nullable();
            $table->text('bio')->nullable();
            $table->longText('socials')->nullable();
            $table->string('contact', 191)->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->timestamps();
            
            $table->foreign('customer_id', 'user_profiles_customer_id_foreign')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
