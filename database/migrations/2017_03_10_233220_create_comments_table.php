<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');

            $table->text('body');

            $table->integer('user_id')->unsigned();

            $table->integer('commentable_id');
            $table->string('commentable_type');

            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}
