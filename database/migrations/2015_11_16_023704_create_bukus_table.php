<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bukus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('cover');
			$table->string('title',100);
			$table->string('description',2000);
			$table->string('category');
			$table->string('language');
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
		Schema::drop('bukus');
	}

}
