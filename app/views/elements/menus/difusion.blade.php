
<?php 
$menu = array(
	array('Prensa', '/press_register'),

	array('Exposiciones', '/pages/difusion/exposiciones-museografia', array(
		array('Exposiciones recientes', '/pages/difusion/exposiciones-recientes'),
			array ('Exposiciones anteriores', '/pages/difusion/exposiciones-anteriores')
		)),

	array('Publicaciones','/pages/difusion/publicaciones', array ( 
		/*array('Libros y revistas', '/pages/press/publicaciones'),*/ 
		array('Libros digitales', '/pages/difusion/libros-digitales'),
		array('Artículos', '/pages/difusion/articulos'))),
	
	array('Noticias', '/news/index'),

	array('Filmoteca en los medios', '/pages/difusion/filmoteca-in-the-media'),

	/*array('Galería', '/pages/press/gallery'),*/

	array('La Filmoteca recomienda', '/pages/difusion/interviews'),

	);

?>

@include('elements.menus.static-pages', compact('menu','selected'))
