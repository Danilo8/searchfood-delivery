<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
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
        Schema::create('restaurants', function (Blueprint $table) {

            //Dados do Restaurante
            $table->increments('id');
            $table->string('restaurant_name');
            $table->char('cnpj', 18)->unique();
            $table->char('restaurant_phone', 14)->unique();
            $table->string('address', 80);
            $table->string('neighborhood', 45);
            $table->string('city', 45);
            $table->char('state', 2);
            $table->char('cep', 9);
            $table->char('profile_picture')->nullable();

            //Dados do Proprietário
            $table->string('owner_name');
            $table->char('cpf', 14)->unique();
            $table->string('owner_email');
            $table->char('owner_phone', 14);

            //Dados de Acesso
            $table->string('email')->unique();
            $table->string('password');

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
        Schema::dropIfExists('restaurants');
    }
}
