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
        Schema::create('auth_admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 200);
            $table->string('password', 64);
            $table->string('salt', 6);
            $table->string('real_name', 200);
            $table->string('mobile', 20);
            $table->integer('status');
            $table->string('last_ip', 20);
            $table->string('otp_id', 200);
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
        Schema::dropIfExists('auth_admins');
    }
}
