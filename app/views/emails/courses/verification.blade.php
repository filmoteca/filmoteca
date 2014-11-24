<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>

		<h2>Usuario registrado</h2>

		<div>
			<p>!Hola {{ $student['name'] }}!</p>

			<p>Fuiste registrado exitosamente en el sistema de cursos de la
				<b>Filmoteca de la UNAM</b>. 
		
			<p>Para entra al sistemas primeramente deberás hacer click en el link
				<a href="{{ URL::route('courses.verification', ['activation_code'=> $activation_code,] , true); }}">Activar</a>
				para activar tu cuenta.

			<p>Después podras iniciar sesion usando tu email y contraseña (la cual puedes cambiar)
			que acompañan este correo.</p>

			<p>email: <b>{{ $student['email']}}</b></p>

			<p>contraseña: <b>{{ $password }}</b>
			
		</div>
	</body>
</html>
