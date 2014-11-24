<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>

		<h2>Reinicio de contraseña</h2>

		<div>
			<p>!Hola {{ $student['name'] }}!</p>

			<p>Has solicitado un reinicio de contraseña. Tus nuevos datos para 
				ingresar al sistema son</p>

			<p>email: <b>{{ $student['email']}}</b></p>

			<p>contraseña: <b>{{ $password}}</b></p>
			
		</div>
	</body>
</html>
