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

		$this->call('CursosSeeder');
		$this->call('SprintsSeeder');
		$this->call('TareasSeeder');
		$this->call('ActividadesSeeder');
	}

}
