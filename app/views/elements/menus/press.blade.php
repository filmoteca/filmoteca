
<?php 
$menu = array(
	array('Prensa', '/press_register'),

	array('Exposiciones', '/pages/press/exposiciones-museografia'),

	array('Publicaciones','/pages/press/publicaciones', 
		array(
		'Libros y revistas', '/pages/press/publicaciones'), 
		array(
		'Libros digitales', '/pages/press/publicaciones')),
	
		array('Noticias', '/news/index'),

	array('Filmoteca en los medios', '/pages/press/filmoteca-in-the-media'),

	array('Entrevistas', '/pages/press/interviews'),

	array('Galería', '/pages/press/gallery')
	);

?>

@include('elements.menus.static-pages', compact('menu','selected'))