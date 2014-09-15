
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
				{{ HTML::linkRoute('admin.film.create', 'Agregar nueva película') }}
			</li>
		</ul>
	</div>
</div>