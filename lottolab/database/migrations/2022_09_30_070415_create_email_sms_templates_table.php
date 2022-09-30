<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailSmsTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_sms_templates', function (Blueprint $table) {
            $table->id();
            $table->string('act', 40);
            $table->string('name', 40);
            $table->string('subj');
            $table->text('email_body')->nullable();
            $table->text('sms_body')->nullable();
            $table->text('shortcodes');
            $table->boolean('email_status')->default(1);
            $table->boolean('sms_status')->default(1);
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
        Schema::dropIfExists('email_sms_templates');
    }
}
