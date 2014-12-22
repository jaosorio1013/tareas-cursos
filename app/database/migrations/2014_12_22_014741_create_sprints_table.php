<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSprintsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sprints', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('numero');
			$table->dateTime('fecha_inicio');
			$table->dateTime('fecha_final');
			//$table->integer('curso_id');

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
		Schema::drop('sprints');
	}

}
