<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SprintsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$cursos = Cursos::all();

		foreach($cursos AS $curso)
		{
			foreach(range(1, 10) as $index)
			{
				Sprint::create([
					'numero' => $index,
					'fecha_inicio' => $faker->dateTime(),
					'fecha_final' => $faker->dateTime(),
					'curso_id' => $curso->id,
				]);
			}
		}
	}

}