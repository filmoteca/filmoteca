<?php

Form::macro('formGroup', 
	function($type, $name, $title, $formname,array $attr = array())
{

	$attributes = '';

	foreach( $attr as $key => $value )
	{
		$attributes .= "\t\t\t" . $key . '="' . $value . '"' ."\n";
	}

	switch( $type )
	{
		case('file'):
			return Form::fileFormGroup($name, $title, $formname, $attributes);

		case('year'):
			return Form::yearFormGroup($name, $title, $formname, $attributes);

		case('country'):
			return Form::countryFormGroup($name, $title, $formname, $attributes);

		case('genre'):
			return Form::genreFormGroup($name, $title, $formname, $attributes);

		case('textarea'):
			return Form::textareaFormGroup($name, $title,$formname, $attributes);

		case('auditorium'):
			return Form::auditoriumFormGroup($name, $title, $formname, $attributes);

		default:
			return "\n" .
			'<div class="form-group"' . "\n" .
			'	ng-class="{\'has-error\' : film_form.' . $name . '.$invalid }">' . "\n" .
			'	<label for="' . $name . '" class="col-sm-2 control-label text-right">' . $title . '</label>' . "\n" .
			'	<div class="col-sm-10">' . "\n" .
			
			Form::input($type, $name, null, [
					'placeholder' => $title, 
					'formname' => $formname, 
					'class'=> 'form-control'
					]) .

			'	</div>' ."\n".
			'</div>' . "\n";
	}
});

Form::macro('fileFormGroup', function($name,$title, $formname, $attributes)
{

	return "\n" .
	'<div class="form-group">' . "\n" .
	'	<label for="' . $name . '" class="col-sm-2 control-label text-right">' . $title . '</label>' . "\n" .
	'	<div class="col-sm-10">' . "\n" .
	'	' . Form::file('image') . "\n" .
	'	</div>' . "\n" .
	'	<p class="help-block">' . $title . '	</p>' . "\n" .
	'</div>'  . "\n";
});

Form::macro('countryFormGroup', function($name, $title, $formname, $attributes)
{
	$options = [
		0 => 'No disponible',
		1 => 'México',
		2 => 'Francia',
		3 => 'Italia'
	];

	return Form::selectFormGroup($name, $options,$title,$formname,$attributes);
});

Form::macro('genreFormGroup', function($name, $title, $formname, $attributes)
{
	$options = Filmoteca\Models\Genre::all(['id','name'])->lists('name','id');

	return Form::selectFormGroup($name, $options,$title,$formname,$attributes);
});

Form::macro('yearFormGroup', function($name, $title, $formname, $attributes)
{
	$options = range(1985, intval(date('Y') + 2));

	return Form::selectFormGroup($name, array_combine($options, $options),$title, $formname, $attributes);
});

Form::macro('auditoriumFormGroup', function($name, $title, $formname, $attributes)
{
	$tmp = Filmoteca\Models\Exhibitions\Auditorium::all(['id','name'])->lists('name','id');

	$options = [0 => 'Ninguna'];

	foreach($tmp as $key => $value)
	{
		$options[$key] = $value;
	}

	return Form::selectFormGroup($name, $options,$title,$formname,$attributes);
});

Form::macro('selectFormGroup', function($name, $options, $title, $formname, $attributes)
{
	return "\n" .
		'<div class="form-group"' . "\n" .
		'	ng-class="{\'has-error\' : film_form.' . $name . '.$invalid }">' . "\n" .
		'	<label for="' . $name . '" class="col-sm-2 control-label text-right">' . $title . '</label>' . "\n" .
		'	<div class="col-sm-10">' . "\n" .
		
		Form::select($name, $options, null,[
				'placeholder' => $title, 
				'formname' => $formname, 
				'class'=> 'form-control'
				]) .

		'	</div>' ."\n".
		'</div>' . "\n";
});

Form::macro('textareaFormGroup', function($name, $title, $formname, $attributes)
{
	return "\n" .
		'<div class="form-group"' . "\n" .
		'	ng-class="{\'has-error\' : film_form.' . $name . '.$invalid }">' . "\n" .
		'	<label for="' . $name . '" class="col-sm-2 control-label text-right">' . $title . '</label>' . "\n" .
		'	<div class="col-sm-10">' . "\n" .
		
		Form::textarea($name, null,[
				'formname' => $formname, 
				'class'=> 'form-control'
				]) .

		'	</div>' ."\n".
		'</div>' . "\n";
});

