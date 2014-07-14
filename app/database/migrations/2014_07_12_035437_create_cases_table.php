<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('abuse_id')->unsigned();
			$table->integer('worker_id')->unsigned();
			$table->integer('abusedChild_id')->unsigned();
			$table->integer('allegedAbuser_id')->unsigned();
			$table->text('note');
			$table->date('caseOpened');
			$table->integer('county_id')->unsigned();
			$table->string('DHRCase');
			$table->boolean('custodyIssues');
			$table->string('IOReport');
			$table->boolean('domesticViolence');
			$table->boolean('prosecution');
			$table->integer('reporter')->unsigned();
			$table->date('abuseDate');
			$table->string('abuseLocation');
			$table->string('reportNature');
			$table->enum('DHRDetermination', array('valid','not valid','unknown'));
			$table->boolean('forensicEvaluation');
			$table->enum('status', array('open','closed'));
			$table->string('parentJurisdiction');
			$table->text('chargesFiled');
			$table->string('agencyReportedTo');
			$table->text('talkedToChild');
			$table->date('reportedDate');
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
		Schema::drop('cases');
	}

}
