<?php

class ExhibitionsTableSeeder extends Seeder
{

    const AMOUNT = 40;

    public function run()
    {
        $exhibitionFilms = array();

        for ($i = 0; $i < FilmsTableSeeder::AMOUNT; $i++) {
            $exhibitionFilm = array(
                'film_id' => $i + 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            );
            array_push($exhibitionFilms, $exhibitionFilm);
        }

        DB::table('exhibition_films')->truncate();
        DB::table('exhibition_films')->insert($exhibitionFilms);

        $exhibitions = [];

        for ($i = 0; $i < self::AMOUNT; $i++) {
            $exhibition = array(
                'exhibition_film_id' => rand(1, FilmsTableSeeder::AMOUNT),
                'type_id' => rand(1, TypesTableSeeder::AMOUNT),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            );
            array_push($exhibitions, $exhibition);
        }

        DB::table('exhibitions')->truncate();
        DB::table('exhibitions')->insert($exhibitions);
    }

}
