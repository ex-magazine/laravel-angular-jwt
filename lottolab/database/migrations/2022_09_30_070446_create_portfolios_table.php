<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('title')->nullable();
            $table->text('image')->nullable();
            $table->text('description')->nullable();
            $table->text('experience')->nullable();
            $table->string('client')->nullable();
            $table->date('date')->nullable();
            $table->string('demo')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
            
            $table->foreign('category_id', 'portfolios_category_id_foreign')->references('id')->on('portfolio_categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
}
