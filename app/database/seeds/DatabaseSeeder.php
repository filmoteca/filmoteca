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

		DB::statement('SET foreign_key_checks = 0');

		// $this->call('UserTableSeeder');
		$this->call('FilmsTableSeeder');

		$this->call('ExhibitionFilmsTableSeeder');

		$this->call('ExhibitionsTableSeeder');

		$this->call('SchedulesTableSeeder');

		$this->call('AuditoriumsTableSeeder');

		$this->call('GenresTableSeeder');

		DB::statement('SET foreign_key_checks = 1');

	}

}
