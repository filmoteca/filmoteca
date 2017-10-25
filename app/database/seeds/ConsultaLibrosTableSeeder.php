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
            $listOfYears = self::getListOfYears();
            $currentDate = new DateTime();

            $type = [
                'title' => $name,
                'indice' => $faker->text(600),
                'sinopsis' => $faker->text(600),
                'year' => $listOfYears,
                'pages' => $faker->randomNumber(10),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ];

            $types[] = $type;
        }

        DB::table('consulta_libros')->truncate();
        DB::table('consulta_libros')->insert($types);
    }

    public static function getListOfYears($length = null)
    {
        if ($length === null) {
            $length = rand(0, 3);
        }

        $year = [];

        for ($j = 0; $j < $length; $j++) {
            $year[] = rand(1900, 2017);
        }

        return implode($year);
    }
}
