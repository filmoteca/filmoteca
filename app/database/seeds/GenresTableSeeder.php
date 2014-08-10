<?php

class GenresTableSeeder extends Seeder {

    public function run()
    {
    	$genres = array();

    	$names = App::make('names');

    	$namesLen = count($names) - 1;

        for( $i = 0; $i < 10; $i++)
        {
            $genre = array(
                'name' => $names[$i],
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
                );

            if( rand(0,1) == 1 && $i > 1)
            {
                array_add($genre,'venue',1);
            }

            array_push($genres, $genre);
        }


        DB::table('genres')->truncate();

        DB::table('genres')->insert($genres);
    }

}