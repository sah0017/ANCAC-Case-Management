<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAbusedChildrenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('abusedChildren', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('person_id')->unsigned();
			$table->string('parentalHistory');
			$table->string('parentStatus');
			$table->boolean('medicalCompleted');
			$table->string('medicalLocation');
			$table->string('schoolGrade');
                        $table->string('school');
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
		Schema::drop('abusedChildren');
	}

}
