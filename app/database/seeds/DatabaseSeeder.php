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

		// $this->call('UserTableSeeder');
		$this->call('FilmsTableSeeder');

		$this->call('ExhibitionFilmsTableSeeder');

		$this->call('ExhibitionsTableSeeder');

		$this->call('SchedulesTableSeeder');

		$this->call('AuditoriumsTableSeeder');

		$this->call('GenresTableSeeder');

		$this->call('ExhibitionTypesTableSeeder');

	}

}
