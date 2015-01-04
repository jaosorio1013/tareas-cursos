<?php

use Faker\Factory as Faker;

class TareasSeeder extends Seeder {
	public function run()
	{
		$faker = Faker::create();

		$sprints = Sprint::all();

		foreach($sprints AS $sprint)
		{
			foreach(range(1, 80) as $index)
			{
				Tarea::create([
					'prioridad' => $faker->randomElement([1, 2, 3, 4, 5]),
					'titulo' => $faker->name,
					'curso_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
					'sprint_id' => $sprint->id,
					'horas_esperadas' => $faker->randomElement([1, 2, 3, 4]),
				]);
			}
		}
	}
}