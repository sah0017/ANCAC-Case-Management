<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaseNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('caseNotes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('case_id')->unsigned();
                        $table->integer('worker_id')->unsigned();
                        $table->text('note');
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
		Schema::drop('caseNotes');
	}

}
