<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SprintsTableSeeder extends Seeder {

	public function run()
	{
		Sprint::create(['numero' => 0]);

		/*$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Sprint::create([
				'numero' => $index,
				'fecha_inicio' => $faker->dateTime(),
				'fecha_final' => $faker->dateTime(),
			]);
		}*/
	}

}