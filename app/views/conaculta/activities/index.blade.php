<activities>
	@foreach($activities as $activity)
	    <activity>
            <ID_ACT_UNAM>{{ $activity->id }}</ID_ACT_UNAM>
            <TITULO_PROGRAMA_ACT>{{ $activity->title }}</TITULO_PROGRAMA_ACT>
            <SUBTITULO_ACT>-</SUBTITULO_ACT>
            <ID_ORGANIZA_UNAM>{{ Config::get('parameters.institution.id') }}</ID_ORGANIZA_UNAM>
            <ORGANIZA_UNAM>{{ Config::get('parameters.institution.name') }}</ORGANIZA_UNAM>
            <ID_RECINTO_UNAM>{{ $activity->facility->id }}</ID_RECINTO_UNAM>
            <RECINTO_UNAM>{{ $activity->facility->name }}</RECINTO_UNAM>
            <AUTOR_ACT>-</AUTOR_ACT>
            <DIRECTOR_ACT>-</DIRECTOR_ACT>
            <REPARTO_ACT>-</REPARTO_ACT>
            <URL_ACT>-</URL_ACT>
            <TIPO_PUBLICO>{{$activity->publicType}}</TIPO_PUBLICO>
            <INFORMES_ACT>{{ $activity->contact }}</INFORMES_ACT>
            <FECHA_HORA>{{ $activity->schedules }}</FECHA_HORA>
            <HORARIOS_ADICIONALES>{{ $activity->extraSchedules }}</HORARIOS_ADICIONALES>
            <PRECIOS>{{ $activity->prices }}</PRECIOS>
            <DESCUENTOS>{{ $activity->discounts }}</DESCUENTOS>
            <COMENTARIOS>{{ $activity->comentaries }}</COMENTARIOS>
            <TEMA>{{ $activity->category }}</TEMA>
            <IMG_MUESTRA_ACT>{{ $activity->image->url('medium') }}</IMG_MUESTRA_ACT>
            <IMG_THUMB_ACT>{{ $activity->image->url('thumbnail') }}</IMG_THUMB_ACT>
            <CANCELADO_ACT>N</CANCELADO_ACT>
            <CANCELADO_RAZONES_ACT>-</CANCELADO_RAZONES_ACT>
            <RESENA_COMPLETA_ACT>{{ $activity->review    }}</RESENA_COMPLETA_ACT>
	    </activity>
	@endforeach

</activities>