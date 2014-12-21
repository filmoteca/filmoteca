<?php

Form::macro('formGroup', 
	function($type, $name, $title, $formname,array $attr = array())
{
	$attr['placeholder'] = $title;
	$attr['formname']	 = $formname;
	$attr['class']		 = 'form-control';
	$attr['ng-model']	 = $formname . '.' .$name;

	switch( $type )
	{
		case('file'):
			return Form::fileFormGroup($name, $title, $formname, $attr);

		case('year'):
			return Form::yearFormGroup($name, $title, $formname, $attr);

		case('country'):
			return Form::countryFormGroup($name, $title, $formname, $attr);

		case('genre'):
			return Form::genreFormGroup($name, $title, $formname, $attr);

		case('textarea'):
			return Form::textareaFormGroup($name, $title,$formname, $attr);

		case('auditorium'):
			return Form::auditoriumFormGroup($name, $title, $formname, $attr);

		case('theMedia'):
			return Form::theMediaFormGroup($name, $title, $formname, $attr);

		case('professor'):
			return Form::professorFormGroup($name, $title, $formname, $attr);

		case('subject'):
			return Form::subjectFormGroup($name, $title, $formname, $attr);

		case('venue'):
			return Form::venueFormGroup($name, $title, $formname, $attr);

		case('date'):
			return Form::dateFormGroup($name, $title, $formname, $attr);

		default:

			return "\n" .
			'<div class="form-group"' . "\n" .
			'	ng-class="{\'has-error\' : film_form.' . $name . '.$invalid }">' . "\n" .
			'	<label for="' . $name . '" class="col-sm-2 control-label text-right">' . $title . '</label>' . "\n" .
			'	<div class="col-sm-10">' . "\n" .

			Form::input($type, $name, null, $attr) .

			'	</div>' ."\n".
			'</div>' . "\n";
	}
});

Form::macro('dateFormGroup', function($name,$title, $formname, $attr){

	return
	'<div class="form-group">' .
	'	<label for="' . $name . '" class="col-sm-2 control-label text-right">' . $title . '</label>' .
	'	<div class="cl-sm-10">' .
	'		<div class="input-group date">' .
	'			<span class="input-group-addon btn"><i class="glyphicon glyphicon-th"></i></span>' .
				Form::input('text', $name, null, $attr) .
	'		</div>' .
	'	</div>' .
	'</div>';
});

Form::macro('fileFormGroup', function($name,$title, $formname, $attr)
{
	unset( $attr['class'] );

	$attr['file-model'] = $attr['ng-model'];

	unset( $attr['ng-model']);

	return "\n" .
	'<div class="form-group">' . "\n" .
	'	<label for="' . $name . '" class="col-sm-2 control-label text-right">' . $title . '</label>' . "\n" .
	'	<div class="col-sm-10">' . "\n" .
	'	' . Form::file($name, $attr) . "\n" .
	'	</div>' . "\n" .
	'	<p class="help-block">' . $title . '	</p>' . "\n" .
	'</div>'  . "\n";
});

Form::macro('countryFormGroup', function($name, $title, $formname, $attributes)
{
	$options = DB::table('countries')->lists('name', 'id');

	return Form::selectFormGroup($name, $options,$title,$formname,$attributes);
});

Form::macro('genreFormGroup', function($name, $title, $formname, $attributes)
{
	$options = Filmoteca\Models\Genre::all(['id','name'])->lists('name','id');

	return Form::selectFormGroup($name, $options,$title,$formname,$attributes);
});

Form::macro('subjectFormGroup', function($name, $title, $formname, $attributes)
{
	$options = Filmoteca\Models\Courses\Subject::all(['id','name'])->lists('name','id');

	return Form::selectFormGroup($name, $options,$title,$formname,$attributes);
});

Form::macro('professorFormGroup', function($name, $title, $formname, $attributes)
{
	$options = Filmoteca\Models\Courses\Professor::all(['id','name'])->lists('name','id');

	return Form::selectFormGroup($name, $options,$title,$formname,$attributes);
});

Form::macro('venueFormGroup', function($name, $title, $formname, $attributes)
{
	$options = Filmoteca\Models\Courses\Venue::all(['id','name'])->lists('name','id');

	return Form::selectFormGroup($name, $options,$title,$formname,$attributes);
});

Form::macro('yearFormGroup', function($name, $title, $formname, $attributes)
{
	$options = range(1959, intval(date('Y') + 2));

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

Form::macro('theMediaFormGroup', function($name, $title, $formname, $attributes){

	$options = ['Televisión', 'Preíodico', 'Radio', 'Otro'];

	return Form::selectFormGroup($name, $options,$title,$formname,$attributes);
});

Form::macro('selectFormGroup', function($name, $options, $title, $formname, $attr)
{
	return "\n" .
		'<div class="form-group"' . "\n" .
		'	ng-class="{\'has-error\' : film_form.' . $name . '.$invalid }">' . "\n" .
		'	<label for="' . $name . '" class="col-sm-2 control-label text-right">' . $title . '</label>' . "\n" .
		'	<div class="col-sm-10">' . "\n" .
		
		Form::select($name, $options, null, $attr) .

		'	</div>' ."\n".
		'</div>' . "\n";
});

Form::macro('textareaFormGroup', function($name, $title, $formname, $attr)
{
	return "\n" .
		'<div class="form-group"' . "\n" .
		'	ng-class="{\'has-error\' : film_form.' . $name . '.$invalid }">' . "\n" .
		'	<label for="' . $name . '" class="col-sm-2 control-label text-right">' . $title . '</label>' . "\n" .
		'	<div class="col-sm-10">' . "\n" .
		
		Form::textarea($name, null,$attr) .

		'	</div>' ."\n".
		'</div>' . "\n";
});

