<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddSprintIdTotareasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tareas', function(Blueprint $table)
		{
			$table->integer('sprint_id');
			$table->integer('curso_id');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sprint_id_totareas', function(Blueprint $table)
		{
			
		});
	}

}
