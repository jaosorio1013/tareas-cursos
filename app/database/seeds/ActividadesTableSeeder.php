<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ActividadesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$tareas = Tarea::all();

		foreach($tareas AS $tarea)
		{
			foreach(range(1, 10) as $index)
			{
				Actividad::create([
					'equipo' => $faker->randomElement([1, 2, 3]),
					'quien' => $faker->randomElement(['Victor', 'Sandra', 'Diego']),
					'cuando' => $faker->dateTime(),
					'cuanto' => $faker->randomElement([1, 2, 3, 4, 5]),
					'estado' => $faker->randomElement(['Sin iniciar', 'Edición', 'Finalización']),
					'tarea_id' => $tarea->id,
				]);
			}
		}
	}

}