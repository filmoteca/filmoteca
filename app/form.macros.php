<?php

Form::macro('formGroup', 
	function($type, $name, $title, $formname,array $attr = array())
{
	$attributes = '';

	foreach( $attr as $key => $value )
	{
		$attributes .= "\t\t\t" . $key . '="' . $value . '"' ."\n";
	}


	return "\n" .
	'<div class="form-group"' . "\n" .
	'	ng-class="{\'has-error\' : film_form.' . $name . '.$invalid }">' . "\n" .
	'	<label for="' . $name . '" class="col-sm-2 control-label text-right">' . $title . '</label>' . "\n" .
	'	<div class="col-sm-10">' . "\n" .
	
	Form::input($type, $name, null, 
		array(
			'placeholder' => $title, 
			'formname' => $formname, 
			'class'=> 'form-control')) .

	'	</div>' ."\n".
	'</div>' . "\n";
});

Form::macro('years', function()
{
	return '';
});

Form::macro('countries', function()
{

});

Form::macro('genres', function()
{

});