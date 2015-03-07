
<?php 
$menu = array(
	array('Prensa', '/press_register'),

	array('Exposiciones', '/pages/press/exposiciones-museografia', array(
		array('Exposiciones recientes', '/pages/press/exposiciones-recientes'),
			array ('Exposiciones anteriores', '/pages/press/exposiciones-anteriores')
		)),

	array('Publicaciones','/pages/press/publicaciones', array ( 
		/*array('Libros y revistas', '/pages/press/publicaciones'),*/ 
		array('Libros digitales', '/pages/press/libros-digitales'),
		array('Artículos', '/pages/press/articulos'))),
	
	array('Noticias', '/news/index'),

	array('Filmoteca en los medios', '/pages/press/filmoteca-in-the-media'),

	/*array('Galería', '/pages/press/gallery'),*/

	array('La Filmoteca recomienda', '/pages/press/interviews'),

	);

?>

@include('elements.menus.static-pages', compact('menu','selected'))
