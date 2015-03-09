<?php
$menu = array(

	array('Programación', '/exhibition'),

	array('Cartelera', '/billboard'),

	array('Invitaciones', '/pages/programacion/invitaciones'),

	array('Histórico', '/exhibition/history')

	);
?>

@include('elements.menus.static-pages', compact('menu','selected'))


