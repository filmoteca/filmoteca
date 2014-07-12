Arquitectura de las vistas
==========================

**Introducción**
-------------

Para generar las vistas utilizaremos el *motor de plantillas* (template engine en inglés) *blade*. Éste se encarga de consumir una plantilla (un archivo con extensión **.blade.php**) y devolver código PHP, para que después éste genere el HTML que vera el usuario.

Parte de las ventajas de usar este engine es que se escribe menos código. Ya que ya no se utilizan ```<?php``` y ```?>``` ni el punto y coma ```;```. Sin embargo éstos se puede utilizar dentro de una plantilla.


**Arquitectura**
----------------

El diseño (layout) principal de las páginas tiene 4 secciones: scripts, styles, breadcrumbs y content. Los dos primeros son para poner los scripts y hojas de estilos (*css*) respectivamente que puede utilizar una vista en particular. La tercera, *breadcrumb* es para poner las migas de pan y la última es donde ira el contenido de la pagina.

Cada una de estás secciones puede ser definida en cada vista.


**Referencia y lo esencial de blade**
--------------

Primeramente, los archivos de las plantilla deben de tener extensión **.blade.php**, (*CakePhp* utiliza la extensión **.ctp** que significa **c**ake **t**em**p**late). Así cuando se guarde un archivo que sera una vista, se deberá guardar con la extensión **.blade.php**.

En la siguiente lista se muestran las sentencias más utilizadas al crear un *template* de  *blade*.


Realizar un echo
--------------------

Se tiene que envolver lo que se desea imprimir con ```{{ }}```. Por ejemplo:

```
<a href="{{ $url }}"> Link con la url= {{ $url }}</a>
``` 

Condiciones y ciclos
--------------------

El equivalente al ```if``` y ```foreach``` es ```@if``` y ```@foreach``` respectivamente. Por ejemplo:

```
@foreach ($films as $index => $film)
    
   @if ( $age > 18 )
       {{$index}} -> {{ $film->title }}
   @else
       <p>Esta película es para mayores de edad</p>
   @endif
   
@endforeach

```

Este código itera sobre una lista de películas (variable ```$films```). Si la edad del usuario (variable ```$age```) es mayor a 18 entonces se le muestra el título de la película. En caso contrario se le manda un mensaje.

Incluyendo vistas en vistas
---------------------------

Para incluir una vista dentro dentro de otra se utiliza ```@include```. Por ejemplo:

```
@include('elements.menus.main-menu', array('age', $age)
```

Este código carga la vista ubicada en ```elements/menus/main-menu.blade.php```. Observar que en ves de usar la diagonal (**/**) para indicar un directorio (o nivel) como en las urls y directorios, se utiliza el punto (**.**). Es principalmente para evitar incompatibilidades entre sistemas de archivos. Ya que, por ejemplo, *Linux* y *Mac* utilizan la diagonal **/** mientras que Windows usa la diagonal invertida (**\**).

El segundo parámetro que se le pasa a ```@include``` es una lista de variables que se le pasaran a la vista.

Secciones
---------

Para incluir en el *layout* una sección definida en una vista se utiliza ```@yield```, por ejemplo:

```
<ul class="breadcrumb">
	<li>{{ HTML::linkRoute('home','Página de inicio') }}</li>
	@yield('breadcrumbs')
</ul>
```
Carga la sección llamada *breadcrumb* definida en una vista con ```@section``` y ```@stop```. Por ejemplo:

```
@section('breadcrumbs')

	<li>
		<a href="/pages/quienes-somos/index">
			Quienes somos
		</a>
	</li>
	<li class="active">
		Consejo Asesor
	</li>

@stop
```






















<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">