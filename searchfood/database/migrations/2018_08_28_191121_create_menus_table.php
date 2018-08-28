<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * --------------------------------------------------------------------------
     * Run the migrations.
     *--------------------------------------------------------------------------
     * @return void
     * --------------------------------------------------------------------------
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('restaurant_id');
            $table->string('product_name');          
            $table->string('product_description', 500);  
            $table->integer('category_id');      
            $table->float('product_price');
            $table->float('promotional_price');
            $table->char('product_photo');
            $table->timestamps();

            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Sheama::dropForeign(['restaurant_id']);
        Sheama::dropForeign(['category_id']);
        Schema::dropIfExists('menus');
    }
}
