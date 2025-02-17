<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->text('public_key');
            $table->text('private_key');
            $table->text('public_worker_key');
            $table->text('private_worker_key');
            $table->string('provider_key_id')->nullable();
            $table->string('api_token')->nullable();
            $table->timestamp('last_alert_received_at')->nullable();
            $table->timestamps();
        });
    }
}
