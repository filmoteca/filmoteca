<?php

class ExhibitionTypesTableSeeder extends Seeder {

    public function run()
    {
    	$types = array(
            array(
                'name' => 'Función Especial',
                'icon' =>'/imgs/exhibition_types/icono1.jpg'),
            array(
                'name' => 'Feria',
                'icon' =>'/imgs/exhibition_types/icono1.jpg'),
            array(
                'name' => 'Festival',
                'icon' =>'/imgs/exhibition_types/icono1.jpg'),
            array(
                'name' => 'Circulo de cine',
                'icon' =>'/imgs/exhibition_types/icono1.jpg'),
            );

        DB::table('exhibition_types')->truncate();

        DB::table('exhibition_types')->insert($types);
    }

}