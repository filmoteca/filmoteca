<?php

class ExhibitionTypesTableSeeder extends Seeder {

    public function run()
    {
    	$types = array(
            array(
                'name' => 'Función Especial',
                'icon' =>'icono1.jpg'),
            array(
                'name' => 'Feria',
                'icon' =>'icono1.jpg'),
            array(
                'name' => 'Festival',
                'icon' =>'icono1.jpg'),
            );

        DB::table('exhibition_types')->truncate();

        DB::table('exhibition_types')->insert($types);
    }

}