<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products-categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('categoria', ['cocina', 'baño', 'dormitorio', 'oficinas', 'sala de estar', 'exteriores', 'otros']);
            $table->integer('product-project');
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
        Schema::dropIfExists('products-categories');
    }
}
