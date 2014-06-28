<?php

class ExhibitionsTableSeeder extends Seeder {

    public function run()
    {
    	$exhibitions = array();

        for( $i = 0; $i < 30; $i++)
        {
            $exhibition = array(
                'exhibition_film_id' => $i + 1,
                'type_id' => rand(1,2),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
                );
            array_push($exhibitions, $exhibition);
        }

        DB::table('exhibitions')->truncate();

        DB::table('exhibitions')->insert($exhibitions);
    }

}