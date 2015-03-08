<?php

class GenresTableSeeder extends Seeder {

    public function run()
    {
        $genres = ['Acción', 'Aventura', 'Catástrofe', 'Ciencia Ficción',
        'Comedia', 'Documental', 'Drama', 'Fantasía', 'Musical', 'Suspenso',
        'Pornográfico', 'Animación', 'Cine Mudo', 'Cine Sonoro', 'Cine 2D',
        'Cine 3D'];

        $rows = array_map(function($genre){
            return [ 'name' => $genre,
                     'created_at' => new DateTime(),
                     'updated_at' => new DateTime()];
        }, $genres);

        DB::statement('SET foreign_key_checks = 0');

        DB::table('genres')->truncate();

        DB::table('genres')->insert($rows);

        DB::statement('SET foreign_key_checks = 1');
    }

}