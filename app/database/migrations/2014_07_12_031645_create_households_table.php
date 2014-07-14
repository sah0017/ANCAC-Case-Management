<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHouseholdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('households', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('pets');
			$table->boolean('medicare');
			$table->boolean('allKids');
			$table->boolean('freeOrReducedLunch');
			$table->boolean('onBase');
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
		Schema::drop('households');
	}

}
