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
			$table->string('first');
			$table->string('middle')->nullable();
			$table->string('last')->nullable();
                        $table->string('alias')->nullable();
			$table->date('dob')->nullable();
                        $table->smallinteger('age')->nullable();
                        $table->enum('gender',array('male','female'));
			$table->boolean('drugUse')->nullable();
			$table->boolean('physicalAbuse')->nullable();
			$table->boolean('sexAbuse')->nullable();
			$table->boolean('mentalHealthTreatment')->nullable();
			$table->boolean('crimeConviction')->nullable();
			$table->boolean('employed')->nullable();
			$table->boolean('fullTime')->nullable();
			$table->boolean('activeMilitary')->nullable();
			$table->boolean('sexAbuseSurvivor')->nullable();
			$table->integer('originCountry')->default(1);
			$table->string('specialNeeds')->nullable();
			$table->string('language')->nullable();
			$table->enum('maritalStatus',array('married','single','divorced'))->nullable();
                        $table->string('cellPhone')->nullable();
                        $table->string('workPhone')->nullable();
			$table->integer('address_id')->unsigned()->default(1);
                        $table->integer('household_id')->unsigned()->default(1);
			$table->integer('ethnicity_id')->unsigned()->default(1);
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
		Schema::drop('persons');
	}

}
