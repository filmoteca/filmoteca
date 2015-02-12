<?php
$menu = array(

	array('Fílmico', '/pages/acervo/filmico'),

	array('Aparatos antiguos', '/pages/acervo/aparatos-antiguos'),

	array('Biblioteca', '/pages/acervo/biblioteca'),

	array('Restauración', '/pages/acervo/restauracion'),

	array('Museo virtual', '/pages/quienes-somos/museo-virtual'),

	array('Cine en línea', '/pages/quienes-somos/cine-en-linea'));
?>

@include('elements.menus.static-pages', compact('menu','selected'))
