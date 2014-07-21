<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('persons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->date('dob');
			$table->boolean('drugUse');
			$table->boolean('physicalAbuse');
			$table->boolean('sexAbuse');
			$table->boolean('mentalHealthTreatment');
			$table->boolean('crimeConviction');
			$table->boolean('employed');
			$table->boolean('fullTime');
			$table->boolean('activeMilitary');
			$table->boolean('sexAbuseSurvivor');
			$table->string('originCountry');
			$table->boolean('specialNeeds');
			$table->boolean('disability');
			$table->string('language');
			$table->enum('maritalStatus',array('married','single','divorced'));
			$table->integer('address_id')->unsigned();
                        $table->integer('household_id')->unsigned();
			$table->integer('ethnicity_id')->unsigned();
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
		Schema::drop('persons');
	}

}
