<?php
$menu = array(

	array('Noticias', '/news/index'),

	array('Filmoteca en los medios', '/pages/press/filmoteca-in-the-media'),

	array('Galería', '/pages/press/gallery'),

	array('Entrevista', '/pages/press/interview'),

	array('Atención a medios', '/press_register')

    );
?>

@include('elements.menus.static-pages', compact('menu','selected'))


