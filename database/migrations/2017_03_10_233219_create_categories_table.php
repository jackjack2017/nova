<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
            $table->boolean('active');
			$table->string('name')->unique();
			$table->string('slug')->unique();
			$table->text('description');
            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}
}
