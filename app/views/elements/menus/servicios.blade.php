<?php

$menu = array(

	array('Lineamientos para acceso al material', '/pages/servicios/lineamientos-generales-para-acceder-al-material'),

	array('Banco de imagen', '/pages/servicios/banco-de-imagen'),

	array('Catalogación', '/pages/servicios/departamento-de-catalogacion'),

	array('Centro de documentación', '/pages/servicios/centro-de-documentacion'),

	array('Depósito y resguardo', '/pages/servicios/deposito-y-resguardo'),

	array('Laboratorio cinematográfico', '/pages/servicios/laboratorio-cinematografico'),

	//esta página queda pendiente hasta tener información
	/*array('Laboratorio digital', '/pages/servicios/laboratorio-digital'),*/

	array('Museografía', '/pages/servicios/exposiciones-museografia'),

	array('Préstamo y alquiler de películas', '/pages/servicios/prestamo-y-alquiler-de-peliculas'),

	array('Producción', '/pages/servicios/departamento-de-produccion'),

	array('Taller de restauración', '/pages/servicios/taller-de-restauracion'));
?>

@include('elements.menus.static-pages', compact('menu','selected'))