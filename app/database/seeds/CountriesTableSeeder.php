<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CountriesTableSeeder extends Seeder {

	public function run()
	{
		$countries = Countries::getList('es', 'php', 'cldr');

		$rows = [];

		foreach($countries as $key => $value){
			$rows[] = [
				'abbreviation' 	=> $key,
				'name' 			=> $value,
				'created_at'	=> new DateTime(),
				'updated_at'	=> new DateTime()
			];
		}

		DB::statement('SET foreign_key_checks = 0');

		DB::table('countries')->truncate();

        DB::table('countries')->insert($rows);

        DB::statement('SET foreign_key_checks = 0');

	}

}