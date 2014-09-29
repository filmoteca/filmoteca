{{--

Este pedaso de vista es utilizaco por otras vistas.

--}}

{{ Form::formGroup('text','title','Título', 'film_form') }}

{{ Form::formGroup('year', 'year', 'Año', 'film_form') }}

{{ Form::formGroup('country', 'country_id', 'País', 'film_form') }}

{{ Form::formGroup('text','duration','Duración','film_form')}}

{{ Form::formGroup('genre', 'genre_id', 'Genero', 'film_form') }}

{{ Form::formGroup('text','director','Director', 'film_form')}}

{{ Form::formGroup('text','script','Guión', 'film_form')}}

{{ Form::formGroup('text','photographic','Fotografía', 'film_form')}}

{{ Form::formGroup('text','music','Música', 'film_form')}}

{{ Form::formGroup('text','edition','Edición', 'film_form')}}

{{ Form::formGroup('text','production','Producción', 'film_form')}}

{{ Form::formGroup('text','cast','Reparto', 'film_form')}}

{{ Form::formGroup('textarea','synopsis','Sinopsis', 'film_form')}}

{{ Form::formGroup('file','image', 'Portada', 'film_form')}}