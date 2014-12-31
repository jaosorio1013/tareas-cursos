<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CursosTableSeeder extends Seeder {

	public function run()
	{
		Curso::create(['nombre' => 'Curso no asinado']);

		/*$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Curso::create([
				'nombre' => $faker->name,
			]);
		}*/
	}

}