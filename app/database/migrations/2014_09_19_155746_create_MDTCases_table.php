<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMDTCasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('MDTCases', function(Blueprint $table)
		{
			$table->integer('MDTMeeting_id')->unsigned();
                        $table->integer('case_id')->unsigned();
                        $table->text('recommendation');
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
		Schema::drop('MDTCases');
	}

}
