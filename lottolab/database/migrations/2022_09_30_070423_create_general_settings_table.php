<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('sitename', 40)->nullable();
            $table->string('cur_text', 40)->nullable()->comment("currency text");
            $table->string('cur_sym', 40)->nullable()->comment("currency symbol");
            $table->string('email_from', 40)->nullable();
            $table->text('email_template')->nullable();
            $table->string('sms_api')->nullable();
            $table->string('base_color', 40)->nullable();
            $table->string('secondary_color', 40)->nullable();
            $table->text('mail_config')->nullable()->comment("email configuration");
            $table->text('sms_config')->nullable();
            $table->boolean('ev')->default(0)->comment("email verification, 0 - dont check, 1 - check");
            $table->boolean('en')->default(0)->comment("email notification, 0 - dont send, 1 - send");
            $table->boolean('sv')->default(0)->comment("sms verication, 0 - dont check, 1 - check");
            $table->boolean('sn')->default(0)->comment("sms notification, 0 - dont send, 1 - send");
            $table->boolean('dc')->default(0)->comment("Deposit Commission");
            $table->boolean('bc')->default(0)->comment("Buy Commission");
            $table->boolean('wc')->default(0)->comment("Win Commission");
            $table->boolean('force_ssl')->default(0);
            $table->boolean('secure_password')->default(0);
            $table->boolean('agree')->default(0);
            $table->boolean('registration')->default(0)->comment("0: Off	, 1: On");
            $table->string('active_template', 40)->nullable();
            $table->text('sys_version')->nullable();
            $table->dateTime('last_cron')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
}
