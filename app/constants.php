<?php

App::singleton('words', function()
{
    return array(
		'Men', 
		'X',
		'La',
		'El',
		'Casa',
		'Lago',
		'Futurama',
		'Resident',
		'Black',
		'Men',
		'Red',
		'Girl',
		'Awesome',
		'All',
		'Is',
		'Dream',
	);
});

App::singleton('names',function()
{
	return array(
		'Victor',
		'Aguilar',
		'Gonzaga',
		'Korina',
		'Belen',
		'Jill',
		'Valentine',
		'Chris',
		'Redfield',
		'Albert',
		'Wesker',
		'Iron',
		'Tony',
		'Stark',
		'Steve',
		'Carlos',
		'Olivera',
		'Nemesis',
	);
});

App::singleton('iconographic', function()
{
	return DB::table('exhibition_types')
				->get()
				->lists('name','id');
});