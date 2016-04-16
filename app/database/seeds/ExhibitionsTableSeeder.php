<?php

class ExhibitionsTableSeeder extends Seeder
{

    const AMOUNT = 40;

    public function run()
    {
        $exhibitions = [];

        for ($i = 0; $i < self::AMOUNT; $i++) {
            $exhibition = array(
                'exhibition_film_id' => $i + 1,
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
