<?php

class ChronologiesTableSeeder extends Seeder
{
    const AMOUNT = 50;

    public function run()
    {
        $faker = Faker\Factory::create('es_MX');
        $types = [];

        for ($i = 0; $i < self::AMOUNT; $i++) {
            $currentDate = new DateTime();

            $type = [
                'description' => $faker->text(600),
                'year' => $faker->dateTimeBetween('-30 years'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ];

            $types[] = $type;
        }

        DB::table('chronologies')->truncate();
        DB::table('chronologies')->insert($types);
    }
}
