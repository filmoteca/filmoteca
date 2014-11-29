<?php

class GenresTableSeeder extends Seeder {

    public function run()
    {
        $genres = ['Acción', 'Aventura', 'Catástrofe', 'Ciencias Ficción',
        'Comedia', 'Documental', 'Drama', 'fantasía', 'Musical', 'Suspenso',
        'Pornográfico', 'Animación', 'Cine Mudo', 'Cine Sonoro', 'Cine 2D',
        'Cine 3D'];

        $rows = array_map(function($genre){
            return [ 'name' => $genre,
                     'created_at' => new DateTime(),
                     'updated_at' => new DateTime()];
        }, $genres);

        DB::table('genres')->truncate();

        DB::table('genres')->insert($rows);
    }

}