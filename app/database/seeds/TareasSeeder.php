<?php

use Faker\Factory as Faker;

class TareasSeeder extends Seeder {
	public function run()
	{
		$faker = Faker::create();

		$sprints = Sprint::all();

		foreach($sprints AS $sprint)
		{
			foreach(range(1, 10) as $index)
			{
				Tarea::create([
					'prioridad' => $faker->randomElement([1, 2, 3, 4, 5]),
					'titulo' => $faker->name,
					//'curso' => $faker->name,
					'sprint_id' => $sprint->id,
					'horas_esperadas' => $faker->randomElement([1, 2, 3, 4]),
				]);
			}
		}
	}
}