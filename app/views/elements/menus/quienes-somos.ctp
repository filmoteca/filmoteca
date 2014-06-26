<?php

$menu = array(

	array('Misión y Visión', '/pages/quienes-somos/mision-y-vision'),

	array('Objetivos y Funciones', '/pages/quienes-somos/objetivos-y-funciones'),

	array('Organigrama', '/pages/quienes-somos/organigrama'),

	array('Consejo Asesor', '/pages/quienes-somos/consejo-asesor'),

	array('Memoria Filmoteca', '/pages/quienes-somos/memoria-filmoteca'),

	array('Cronología', '/pages/quienes-somos/cronologia'),

	array('Medalla Filmoteca', '/pages/quienes-somos/medalla-filmoteca'),

	array('Directorio', '/pages/quienes-somos/directorio'));

echo $this->element('menus/static-pages', compact('menu','selected'));