{{--

Este pedaso de vista es utilizaco por otras vistas.

--}}

{{ Form::formGroup('text','title','Título', 'film') }}

{{ Form::formGroup('text', 'original_title', 'Título Original', 'film')}}

@if( isset($resource) )
    {{ 
        Form::multiYear('years[]', 'Año', $resource->years)
    }}
@else
    {{ 
        Form::multiYear('years[]', 'Año', []);
    }}
@endif

@if( isset($resource) )
    {{ 
        Form::multiCountry('countries[]', 'Países', $resource->countries->lists('id'))
    }}
@else
    {{ 
        Form::multiCountry('countries[]', 'Países', []);
    }}
@endif

{{-- {{ Form::formGroup('multiCountry', 'countries[]', 'País', 'film') }} --}}

{{ Form::formGroup('text','duration','Duración (minutos)','film')}}

{{ Form::formGroup('genre', 'genre_id', 'Genero', 'film') }}

{{ Form::formGroup('text','director','Director', 'film')}}

{{ Form::formGroup('text','script','Guión', 'film')}}

{{ Form::formGroup('text','photographic','Fotografía', 'film')}}

{{ Form::formGroup('text','music','Música', 'film')}}

{{ Form::formGroup('text','edition','Edición', 'film')}}

{{ Form::formGroup('text','production','Producción', 'film')}}

{{ Form::formGroup('text','cast','Reparto', 'film')}}

{{ Form::formGroup('textarea','synopsis','Sinopsis', 'film')}}

{{ Form::formGroup('textarea','trailer', 'Trailer', 'film', ['class' => 'ckeditor-only-youtube'])}}

{{ Form::formGroup('textarea','notes', 'Notas', 'film')}}

{{ Form::formGroup('file','image', 'Portada', 'film')}}