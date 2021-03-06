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
			$table->integer('idpengguna');
			$table->text('cover');
			$table->string('title',100);
			$table->string('description',2000);
			$table->string('slug');
			$table->timestamps();
			$table->softDeletes();
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
