<?php

$menu = array(

	array('Lineamientos generales para acceder al material', '/pages/servicios/lineamientos-generales-para-acceder-al-material'),

	array('Banco de imagen', '/pages/servicios/banco-de-imagen'),

	array('Catalogación', '/pages/servicios/departamento-de-catalogacion'),

	array('Depósito y resguardo', '/pages/servicios/deposito-y-resguardo'),

	array('Exposiciones', '/pages/servicios/exposiciones-museografia'),

	array('Laboratorio', '/pages/servicios/laboratorio'),

	array('Préstamo y alquiler de películas', '/pages/servicios/prestamo-y-alquiler-de-peliculas'),

	array('Producción', '/pages/servicios/departamento-de-produccion'),

	array('Taller de restauración', '/pages/servicios/taller-de-restauracion'));
?>

@include('elements.menus.static-pages', compact('menu','selected'))