<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CursosTableSeeder');
		$this->call('SprintsTableSeeder');
		$this->call('TareasSeeder');
		$this->call('ActividadesTableSeeder');
	}

}
