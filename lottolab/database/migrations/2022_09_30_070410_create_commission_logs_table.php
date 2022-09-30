<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commission_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('to_id');
            $table->integer('from_id');
            $table->string('level', 191);
            $table->decimal('amount', 18, 8);
            $table->string('main_amo', 191);
            $table->decimal('percent', 18, 8);
            $table->string('title', 191);
            $table->string('commission_type', 10)->nullable();
            $table->string('trx', 191);
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
        Schema::dropIfExists('commission_logs');
    }
}
