<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * --------------------------------------------------------------------------
     * Run the migrations.
     * --------------------------------------------------------------------------
     * @return void
     * --------------------------------------------------------------------------
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('address', 80)->nullable();
            $table->string('neighborhood', 45)->nullable();
            $table->string('city', 45)->nullable();
            $table->char('state', 2)->nullable();
            $table->string('password');
            $table->char('profile_picture')->nullable();
            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * --------------------------------------------------------------------------
     * Reverse the migrations.
     * --------------------------------------------------------------------------
     * @return void
     * --------------------------------------------------------------------------
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
