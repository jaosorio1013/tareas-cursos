<?php

use Faker\Factory as Faker;

class TareasSeeder extends Seeder {
	public function run()
	{
		$faker = Faker::create();
		foreach(range(1, 80) as $index)
		{
			Tarea::create([
				'prioridad' => $faker->randomElement([1, 2, 3]),
				'titulo' => $faker->name,
				'curso' => $faker->name,
				'sprint' => $index,
				'horas_esperadas' => $faker->randomElement([1, 2, 3]),
			]);
		}
	}
}