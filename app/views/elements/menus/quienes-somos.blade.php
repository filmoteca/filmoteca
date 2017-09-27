<?php
$menu = array(

	array('Misión y Visión', '/pages/quienes-somos/mision-y-vision'),

	array('Objetivos y Funciones', '/pages/quienes-somos/objetivos-y-funciones'),

	array('Cuerpos colegiados', '/pages/quienes-somos/cuerpos-colegiados'),

	array('Memoria Filmoteca', '/pages/quienes-somos/memoria-filmoteca'), 

	array('Cronología', '/chronology'),

	array('Medalla Filmoteca', '/pages/quienes-somos/medalla-filmoteca', array(
		array('Galardonados', '/filmoteca-medal'))),

	array('Libro Filmoteca: 50 años', '/pages/quienes-somos/libro-filmoteca50'),

	array('55 Aniversario', '/pages/aniversario55/index'),

	array('FICUNAM', '/pages/quienes-somos/ficunam'),

	array('Directorio', '/pages/quienes-somos/directorio'));
?>

@include('elements.menus.static-pages', compact('menu','selected'))


