<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phases', function (Blueprint $table) {
            $table->id();
            $table->integer('phase_number')->default(0);
            $table->integer('lottery_id');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->integer('quantity');
            $table->integer('available')->default(0);
            $table->integer('salled')->default(0);
            $table->integer('draw_status')->default(0);
            $table->integer('at_dr')->default(1)->comment("auto draw");
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('phases');
    }
}
