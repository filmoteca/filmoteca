<?php

class ConsultaLibrosTableSeeder extends Seeder
{
    const AMOUNT = 50;

    public function run()
    {
        $faker = Faker\Factory::create('es_MX');
        $types = [];

        for ($i = 0; $i < self::AMOUNT; $i++) {
            $name = $faker->sentence(rand(2, 6));
            $currentDate = new DateTime();

            $type = [
                'title' => $name,
                'indice' => $faker->text(600),
                'award_date' => $faker->dateTimeBetween('-30 years'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'sinopsis' => $faker->text(600)
            ];

            $types[] = $type;
        }

        DB::table('consulta_libros')->truncate();
        DB::table('consulta_libros')->insert($types);
    }
}
