<?php namespace Filmoteca\Models\Exhibitions;

use Illuminate\Database\Eloquent\Collection;
use DB;
use Eloquent;

class Exhibition extends Eloquent
{
	protected $fillable = ['exhibition_film_id', 'type_id'];
	
	public function exhibitionFilm()
	{
		return $this->belongsTo('Filmoteca\Models\Exhibitions\ExhibitionFilm');
	}

	public function type()
	{
		return $this->belongsTo('Filmoteca\Models\Exhibitions\Type');
	}

	public function schedules()
	{
		return $this->hasMany('Filmoteca\Models\Exhibitions\Schedule')->with('auditorium');
	}

	public function auditoriums()
	{
		return $this->hasManyThrough('Filmoteca\Models\Exhibitions\Auditorium', 'Schedule');
	}

	public function films(){

		return $this->hasManyThrough('Filmoteca\Models\Film', 'Filmoteca\Models\Exhibitions\ExhibitionFilm');
	}

	public function getTechnicalCard()
	{
		$tc = array(); //tecnicalCard.

		$film = $this->exhibition_film->film;

		$tc['título'] 	= $film->title;

		$tc['año'] 		= $film->year;

		$tc['pais'] 	= DB::table('countries')->find($film->country_id)->name;

		$tc['duración'] = $film->duration;

        $tc['género']   = $film->genre->name;

		$tc['director']	= $film->director;

		$tc['guión']	= $film->script;

		$tc['fotografía'] = $film->photographic;

		$tc['música'] 	= $film->music;

		$tc['edición']	= $film->edition;

		$tc['producción'] = $film->production;

		$tc['reparto']	= $film->cast;

		$tc['sinopsis']	= $film->synopsis;

		$tc['notas'] = $film->notes;

		$technicalCard = array();

		foreach( $tc as $key => $value)
		{
			if( !empty($value) )
			{
				$technicalCard[$key] = $value;
			}
		}

		return $technicalCard;
	}

	public function getAuditoriumsAttribute($value)
	{
		return $this->schedules->map(function($schedule){
			return $schedule->auditorium;
		})->unique();
	}

	public function schedulesByAuditorium($id)
	{
		$schedules = $this->schedules->filter(function($schedule) use ($id){
			return $schedule->auditorium->id === $id;
		});

		return $this->groupSchedulesByDay($schedules);
	}

	protected function groupSchedulesByDay(Collection $schedules)
	{
		$groups = [];

		foreach($schedules as $schedule){

			$day_time = explode(' ', $schedule->entry);

			$day 	= $day_time[0];
			$time 	= $day_time[1];


			if(!isset($group[$day])){
				$group[$day] = [];
			}

			$groups[$day][] = $time; //push
		}

		foreach($groups as &$group){

			sort($group, SORT_NATURAL);
		}

		return $groups;
	}

	protected function setTypeIdAttribute($value)
	{
		$this->attributes['type_id'] = ($value === 0)? null: $value;
	}
}