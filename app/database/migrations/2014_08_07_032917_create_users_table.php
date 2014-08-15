<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('users', function(Blueprint $table)
            {
                $table->string('id', 24)->primary();
                $table->string('remember_token',100)->nullable();
                $table->string('fullname', 128);
                $table->string('password', 64);
                $table->string('email', 128)->nullable();
                $table->integer('user_id')->unsigned();
                $table->integer('center_id')->unsigned();
                $table->integer('level')->default(1);
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
		Schema::table('users', function(Blueprint $table)
		{
			//
		});
	}

}
