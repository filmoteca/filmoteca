<?php namespace Filmoteca;

class ExhibitionsManager
{
	/**
	 * Devuelve una lista de los distintos iconos de la colección de
	 * exhibiciones dada.
	 *
	 * Un icono representa un tipo de exhibición.
	 * 
	 * @param $exhibitions Lista de exhibiciones.
	 */
	public function getIcons($exhibitions)
	{
		return $exhibitions->filter(function($exhibition)
		{
			return !is_null( $exhibition->type );
		})->map(function($exhibition)
		{
			return $exhibition->type;
		})->unique();
	}
}