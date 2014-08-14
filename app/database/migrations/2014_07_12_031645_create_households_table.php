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
			$table->text('pets')->nullable();
			$table->boolean('medicare')->default(false);
			$table->boolean('allKids')->default(false);
			$table->boolean('freeOrReducedLunch')->default(false);
			$table->boolean('onBase')->default(false);
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
