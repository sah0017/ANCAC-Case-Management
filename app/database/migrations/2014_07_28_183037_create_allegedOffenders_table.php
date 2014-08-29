<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAllegedOffendersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('allegedOffenders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('case_id')->unsigned();
			$table->integer('person_id')->unsigned();
			$table->integer('county_id')->unsigned();
                        $table->integer('center_id')->unsigned();
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
		Schema::drop('allegedOffenders');
	}

}
