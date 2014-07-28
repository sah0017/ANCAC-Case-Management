<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSessionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sessions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('serviceType_id')->unsigned();
			$table->date('date');
                        $table->time('timeStart');
			$table->time('timeEnd')->nullable();
                        $table->enum('status',array('scheduled','no-show','cancled','attended','rescheduled'))->nullable;
			$table->integer('worker_id')->unsigned();
                        $table->enum('discussedAbuse',array('yes','no','partial'))->nullable();
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
		Schema::drop('sessions');
	}

}
