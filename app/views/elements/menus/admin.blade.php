
<div class="btn-group">
	
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Películas
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li>
				{{ HTML::linkRoute('admin.film.index', 'Ver todas las películas') }}
			</li>
			<li>
				{{ HTML::linkRoute('admin.film.create', 'Agregar película') }}
			</li>
		</ul>
	</div>

	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Programación
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li>
				{{ HTML::linkRoute('admin.exhibition.index', 'Ver toda la programación') }}
			</li>
			<li>
				{{ HTML::linkRoute('admin.exhibition.create', 'Agregar exhibition') }}
			</li>
		</ul>
	</div>

	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Salas
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li>
				{{ HTML::linkRoute('admin.auditorium.index', 'Ver todas las salas') }}
			</li>
			<li>
				{{ HTML::linkRoute('admin.auditorium.create', 'Agregar salas') }}
			</li>
		</ul>
	</div>

	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Medalla Filmoteca
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li>
				{{ HTML::linkRoute('admin.auditorium.index', 'Ver todos los ganadores') }}
			</li>
			<li>
				{{ HTML::linkRoute('admin.auditorium.create', 'Agregar ganador') }}
			</li>
		</ul>
	</div>

	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Noticias
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li>
				{{ HTML::linkRoute('admin.news.index', 'Ver todas las noticias') }}
			</li>
			<li>
				{{ HTML::linkRoute('admin.news.create', 'Agregar noticia') }}
			</li>
		</ul>
	</div>

	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Cartelera Digital
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li>
				{{ HTML::linkRoute('admin.billboard.index', 'Ver todas las carteleras') }}
			</li>
			<li>
				{{ HTML::linkRoute('admin.billboard.create', 'Agregar cartelera') }}
			</li>
			<li>
				{{ HTML::linkRoute('admin.billboard.send', 'Enviar ultima cartelera') }}
			</li>
		</ul>
	</div>

</div>