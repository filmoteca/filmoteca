<?php

$menu = array(

	array('Fílmico', '/pages/acervo/filmico'),

	array('Aparatos antiguos', '/pages/acervo/aparatos-antiguos'),

	array('Biblioteca', '/pages/acervo/biblioteca'),

	array('Restauración', '/pages/acervo/restauracion'),

	array('Museo virtual', '/pages/acervo/museo-virtual'),


	array('cine en línea', '/pages/acervo/cine-en-linea'),

	);
?>

@include('elements.menus.static-pages', compact('menu','selected'))