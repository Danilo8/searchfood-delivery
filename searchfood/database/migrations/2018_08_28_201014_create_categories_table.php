<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
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
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('restaurant_id');
            $table->string('category_name');
            $table->timestamps();

            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
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
        $table->dropForeign(['restaurant_id']);
        Schema::dropIfExists('categories');
    }
}
