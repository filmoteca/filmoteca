<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Verificación de email</h2>

		<div>
			<p>!Hola {{ $student['name'] }}!</p>

			<p>Para completar tu registro en sistema de cursos de la Filmoteca
				de la UNAM debes dar click en el link <a href="{{ URL::route('courses.verification', ['activation_code'=> $activation_code,] , true); }}">VALIDAR</a></p>
			
		</div>
	</body>
</html>
