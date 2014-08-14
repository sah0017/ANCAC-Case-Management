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
			$table->string('parentalHistory')->nullable();
			$table->string('parentStatus')->nullable();
			$table->boolean('medicalCompleted')->default(false);
			$table->string('medicalLocation')->nullable();
			$table->string('schoolGrade')->nullable();
                        $table->integer('school')->unsigned()->nullable();
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
		Schema::drop('abusedChildren');
	}

}
