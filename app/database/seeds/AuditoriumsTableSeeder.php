<?php

class AuditoriumsTableSeeder extends Seeder {

    public function run()
    {
    	$auditoriums = array();

    	$names = App::make('names');

    	$namesLen = count($names) - 1;

        for( $i = 0; $i < 6; $i++)
        {
            $auditorium = array(
                'name' => $names[rand(0,$namesLen)] . ' ' . $names[rand(0,$namesLen)],
                'address' => 'Una dirección haci aun lugar muy muy lejano.',
                'telephone' => '21579919, 20407979',
                'schedule' => 'De 9 de la noche a 10 de la mañana.',
                'general_cost' => rand(0,500) / 10,
                'special_cost' => rand(0, 500) / 10,
                'map' => 'https://www.google.com/maps/@19.3304256,-99.274622,14z',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
                );

            if( rand(0,1) == 1 && $i > 1)
            {
                array_add($auditoriums, 'venue', 1);
            }

            array_push($auditoriums, $auditorium);
        }

        DB::table('auditoriums')->truncate();

        DB::table('auditoriums')->insert($auditoriums);
    }

}