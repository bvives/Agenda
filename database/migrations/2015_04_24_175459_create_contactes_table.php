<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contactes', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('nom');
                        $table->string('email');
                        $table->string('tlf');
                        $table->string('slug')->unique();
			$table->timestamps();
		});
                Schema::create('cita_contacte', function(Blueprint $table)
		{
			$table->integer('cita_id');
                        $table->integer('contacte_id');
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
		Schema::drop('contactes');
	}

}
