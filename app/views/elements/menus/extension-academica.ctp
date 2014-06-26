<?php 

$menu = array(
	0 => array('Cursos y Talleres','/pages/cursos_talleres', array(
		'Procedimiento de inscripción', '/pages/procedimientos_inscripcion_cursos'), array(
		'Formulario de Registro', 'plugin' => 'courses', 'controller' => 'students', 'action' => 'register')),
	1 => array('Atención a alumnos', '/pages', array(
		'Servicio Social', '/pages/servicio_social'), array(
		'Becarios', '/pages/becarios')),
	2 => array('Visitas guiadas', '/pages/visitas_guiadas')
	);

echo $this->element('menus/static-pages', compact('menu','selected'));