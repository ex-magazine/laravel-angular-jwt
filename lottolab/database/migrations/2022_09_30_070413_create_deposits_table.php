<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('method_code');
            $table->decimal('amount', 28, 8)->default(0.00000000);
            $table->string('method_currency', 40);
            $table->decimal('charge', 28, 8)->default(0.00000000);
            $table->decimal('rate', 28, 8)->default(0.00000000);
            $table->decimal('final_amo', 28, 8)->default(0.00000000);
            $table->text('detail')->nullable();
            $table->string('btc_amo')->nullable();
            $table->string('btc_wallet')->nullable();
            $table->string('trx', 40)->nullable();
            $table->integer('try')->default(0);
            $table->boolean('status')->default(0)->comment("1=>success, 2=>pending, 3=>cancel");
            $table->boolean('from_api')->default(0);
            $table->string('admin_feedback')->nullable();
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
        Schema::dropIfExists('deposits');
    }
}
