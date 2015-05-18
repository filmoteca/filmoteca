<?php namespace Filmoteca;

use Illuminate\Database\Eloquent\Collection;

class ExhibitionsManager
{
	/**
	 * Devuelve una lista de los distintos iconos de la colección de
	 * exhibiciones dada.
	 *
	 * Un icono representa un tipo de exhibición.
	 * 
	 * @param $exhibitions Lista de exhibiciones.
	 * @return Collection Lista de todos los distintos iconos de las exhibiciones dadas.
	 */
	public function getIcons($exhibitions)
	{
		return $exhibitions
			->filter(function($exhibition){

				return !is_null( $exhibition->type );
			})->map(function($exhibition){

				return $exhibition->type;
			})->unique();
	}

	/**
	 * Devuelve una lista de los distintas salas de la colección de
	 * exhibiciones dada.
	 *
	 * 
	 * @param $exhibitions Lista de exhibiciones.
	 * @return  Collection Lista de todas las distintas salas de las exhibiciones dadas.
	 */
	public function getAuditoriums($exhibitions)
	{
		$auditoriums = $exhibitions->reduce(function($accum, $exhibition){

			return $accum->merge($exhibition->auditoriums);
		}, Collection::make([]));

		return $auditoriums;
	}
}