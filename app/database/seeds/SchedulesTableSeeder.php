<?php

class SchedulesTableSeeder extends Seeder {

    public function run()
    {
    	$schedules = array();

        for( $i = 0; $i < 30; $i++)
        {
            for( $j = 0; $j < rand(1,10); $j++)
            {
                $schedule = array(
                    'exhibition_id' => $i +1,
                    'auditorium_id' => rand(1,6),
                    'entry' => date('Y-m-') . rand(0,28) . ' ' . rand(0,24) . ':'. rand(0,60) . ':' .rand(0,60),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
                    );
                array_push($schedules, $schedule);
            }
        }

        DB::table('schedules')->truncate();

        DB::table('schedules')->insert($schedules);
    }

}