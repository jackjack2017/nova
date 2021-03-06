<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('price_with_discount')->nullable();
            $table->text('description')->nullable();
            $table->integer('category_id');
            $table->string('brand')->nullable();
            $table->string('season')->nullable();
            $table->string('style')->nullable();
            $table->string('textile')->nullable();
            $table->text('comment')->nullable();
            $table->string('gender')->nullable();;

            $table->string('slug');
            $table->string('article');

            $table->boolean('new')->default(true);
            $table->boolean('top')->default(false);
            $table->boolean('active')->default(false);

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
        Schema::dropIfExists('products');
    }
}
