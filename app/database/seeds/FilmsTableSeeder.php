<?php

class FilmsTableSeeder extends Seeder {

    public function run()
    {
    	$films = array();

    	$words = App::make('words');

    	$names = App::make('names');

    	$wordsLen = count($words) - 1;

    	$namesLen = count($names) - 1;

    	for($i = 0; $i < 30; $i++)
    	{
    		$film = array();

    		$film['title'] = $words[rand(0, $wordsLen)] . ' ' . $words[rand(0, $wordsLen)] . ' ' . $words[rand(0,$wordsLen)];

            $film['original_title'] = 'original' . $words[rand(0, $wordsLen)] . ' ' . $words[rand(0, $wordsLen)] . ' ' . $words[rand(0,$wordsLen)];

			$dates = [];

			$amountDates = rand(1,8);

			for($j = 0; $j < $amountDates; $j++ )
			{
				$dates[] = rand(1970,2014);
			}

    		$film['years'] = implode(',', $dates);

    		$film['duration'] = rand(0,3) . ':' .rand(0, 60) . ':' . rand(0, 60);

    		$film['genre_id'] = rand(0,10);

    		$film['director'] = $names[rand(0, $namesLen)] . ' ' . $names[rand(0, $namesLen )] . ' ' .$names[rand(0, $namesLen)];

    		$film['script'] = $names[rand(0, $namesLen)] . ' ' . $names[rand(0, $namesLen )] . ' ' .$names[rand(0, $namesLen)];

    		$film['photographic'] = $names[rand(0, $namesLen)] . ' ' . $names[rand(0, $namesLen )] . ' ' .$names[rand(0, $namesLen)];

    		$film['music'] = '';

    		for( $j = 0; $j< rand(0,10); $j++)
    		{
    			$film['music'] .= ' ' . $names[rand(0, $namesLen)] . ' ' . $names[rand(0, $namesLen )] . ' ' .$names[rand(0, $namesLen)];
    		}

    		$film['edition'] = '';

    		for( $j = 0; $j< rand(0,10); $j++)
    		{
    			$film['edition'] .= ' ' . $names[rand(0, $namesLen)] . ' ' . $names[rand(0, $namesLen )] . ' ' .$names[rand(0, $namesLen)];
    		}

    		$film['production'] = '';

    		for( $j = 0; $j< rand(0,10); $j++)
    		{
    			$film['production'] .= ' ' . $names[rand(0, $namesLen)] . ' ' . $names[rand(0, $namesLen )] . ' ' .$names[rand(0, $namesLen)];
    		}

    		$film['cast'] = '';

    		for( $j = 0; $j< rand(0,10); $j++)
    		{
    			$film['cast'] .= ' ' . $names[rand(0, $namesLen)] . ' ' . $names[rand(0, $namesLen )] . ' ' .$names[rand(0, $namesLen)];
    		}

    		$film['synopsis'] = '';

    		for( $j = 0; $j< rand(0,50); $j++)
    		{
    			$film['synopsis'] .= ' ' . $names[rand(0, $namesLen)] . ' ' . $names[rand(0, $namesLen )] . ' ' .$names[rand(0, $namesLen)];
    		}

    		$film['trailer'] = '';

    		$film['created_at'] = new DateTime();

    		$film['updated_at'] = new DateTime();

    		array_push($films, $film);
    	}

        DB::table('films')->truncate();

        DB::table('films')->insert($films);
    }

}