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
                'sinopsis' => $faker->text(600),
                'autor' => $name,
                'editorial' => $name,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ];

            $types[] = $type;
        }

        DB::table('consulta_libros')->truncate();
        DB::table('consulta_libros')->insert($types);
    }
}
