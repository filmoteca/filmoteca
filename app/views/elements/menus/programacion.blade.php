<?php
$menu = array(

	array('Programación', '/exhibition'),

	array('Cartelera', '/'),

	array('Invitaciones', '/pages/invitaciones/invitaciones'),

	array('Histórico', '/exhibition/history')

	);
?>

@include('elements.menus.static-pages', compact('menu','selected'))


