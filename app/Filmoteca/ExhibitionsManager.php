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
		$icons = array();
		
		foreach( $exhibitions as $exhibition )
		{
			$icon_id = $exhibition->type->id;

			$icons[$icon_id] = $exhibition->type;
		}

		return $icons;
	}
}