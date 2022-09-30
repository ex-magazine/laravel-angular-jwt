<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 40)->nullable();
            $table->string('lastname', 40)->nullable();
            $table->string('username', 40);
            $table->string('email', 40)->unique('users_email_unique');
            $table->string('country_code', 40)->nullable();
            $table->boolean('is_active')->default(1);
            $table->bigInteger('shop_id')->nullable()->index('users_shop_id_foreign');
            $table->boolean('email_notification_status')->default(1);
            $table->boolean('push_notification_status')->default(1);
            $table->boolean('device_type')->default(1);
            $table->string('language', 191)->nullable();
            $table->string('device_id', 191)->nullable();
            $table->string('zip', 20)->nullable();
            $table->string('state', 191)->nullable();
            $table->string('city', 191)->nullable();
            $table->string('reset_code', 191)->nullable();
            $table->string('email_verified', 256)->default('0');
            $table->tinyInteger('role')->default(2);
            $table->string('photo', 191)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('country', 191)->nullable();
            $table->boolean('active_status')->default(1);
            $table->string('name', 191)->nullable();
            $table->string('mobile', 40)->nullable();
            $table->unsignedInteger('ref_by')->default(0);
            $table->decimal('balance', 28, 8)->default(0.00000000);
            $table->string('password');
            $table->string('image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('address')->nullable()->comment("contains full address");
            $table->boolean('status')->default(1)->comment("0: banned, 1: active");
            $table->boolean('ev')->default(0)->comment("0: email unverified, 1: email verified");
            $table->boolean('sv')->default(0)->comment("0: sms unverified, 1: sms verified");
            $table->string('ver_code', 40)->nullable()->comment("stores verification code");
            $table->dateTime('ver_code_send_at')->nullable()->comment("verification send time");
            $table->boolean('ts')->default(0)->comment("0: 2fa off, 1: 2fa on");
            $table->boolean('tv')->default(1)->comment("0: 2fa unverified, 1: 2fa verified");
            $table->string('tsc')->nullable();
            $table->rememberToken();
            $table->timestamps();
            
            $table->unique(['username', 'email'], 'username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
