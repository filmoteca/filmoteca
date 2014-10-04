{{--

Este pedaso de vista es utilizaco por otras vistas.

--}}

{{ Form::formGroup('text','title','Título', 'film') }}

{{ Form::formGroup('year', 'year', 'Año', 'film') }}

{{ Form::formGroup('country', 'country_id', 'País', 'film') }}

{{ Form::formGroup('text','duration','Duración','film')}}

{{ Form::formGroup('genre', 'genre_id', 'Genero', 'film') }}

{{ Form::formGroup('text','director','Director', 'film')}}

{{ Form::formGroup('text','script','Guión', 'film')}}

{{ Form::formGroup('text','photographic','Fotografía', 'film')}}

{{ Form::formGroup('text','music','Música', 'film')}}

{{ Form::formGroup('text','edition','Edición', 'film')}}

{{ Form::formGroup('text','production','Producción', 'film')}}

{{ Form::formGroup('text','cast','Reparto', 'film')}}

{{ Form::formGroup('textarea','synopsis','Sinopsis', 'film')}}

{{ Form::formGroup('file','image', 'Portada', 'film')}}