<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTareasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tareas', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('prioridad');
			$table->string('titulo');
			$table->integer('tiempo_locucion');
			$table->integer('tiempo_real');
			$table->float('horas_esperadas');
			//$table->integer('curso_id');
			$table->integer('sprint_id');

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
		Schema::drop('tareas');
	}

}
