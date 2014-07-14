<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDHRcasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DHRCases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('household_id');
			$table->string('caseNumber');
			$table->enum('status',array('open','closed'));
			$table->string('type');
			$table->date('opened');
			$table->date('closed');
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
		Schema::drop('DHRCases');
	}

}
