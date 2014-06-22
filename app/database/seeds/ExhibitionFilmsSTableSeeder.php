<?php

class ExhibitionFilmsTableSeeder extends Seeder {

    public function run()
    {
    	$exhibitionFilms = array();

    	$names = App::make('names');

    	$namesLen = count($names) - 1;

        for( $i = 0; $i < 30; $i++)
        {
            $exhibitionFilm = array(
                'film_id' => $i + 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
                );
            array_push($exhibitionFilms, $exhibitionFilm);
        }

        DB::table('exhibition_films')->truncate();

        DB::table('exhibition_films')->insert($exhibitionFilms);
    }

}