<?php 


$menu = array(

	array('Puntos de venta', '/pages/libreria/libreria'),

	array('Venta en línea', 'http://cine.libros.unam.mx/')

	/*array('Catálogo', '/pages/libreria/catalogo')*/);

?>

@include('elements.menus.static-pages', compact('menu','selected'))