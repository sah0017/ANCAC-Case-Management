<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelationshipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('relationships', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('abusedChild_id')->unsigned();
                        $table->integer('person_id')->unsigned();
			$table->integer('relationType_id')->unsigned();
			$table->string('alias')->nullable();
			$table->boolean('custodian')->default(false);
			$table->boolean('sameHouse');
                        $table->boolean('allegedOffender')->default(false);
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
		Schema::drop('relationships');
	}

}
