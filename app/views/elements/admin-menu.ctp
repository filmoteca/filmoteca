<div class="btn-group">
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Programación
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li><?php
				echo $this->Html->link(
						'Ver todas la programación.'
						, '/admin/exhibitions')
				?>
			</li>
			<li><?php
				echo $this->Html->link(
						'Agregar una nueva programación.'
						, '/admin/exhibitions/add')
				?>
			</li>
			<li><?php
				echo $this->Html->link(
						'Agregar nuevo género.'
						, '/admin/genres/add')
				?>
			</li>
		</ul>
	</div>

	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Artículos
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li><?php
				echo $this->Html->link(
						'Ver todos los libros.'
						, '/admin/items/index/Book')
				?>
			</li>
			<li><?php
				echo $this->Html->link(
						'Ver todas las películas.'
						, '/admin/items/index/Film')
				?>
			</li>
			<li><?php
				echo $this->Html->link(
						'Ver todos los artículos promocionales.'
						, '/admin/items/index/Souvenir')
				?>
			</li>
			<li><?php
				echo $this->Html->link(
						'Agregar un nuevo artículo.'
						, '/admin/items/add')
				?>
			</li>
			<li><?php
				echo $this->Html->link(
						'Agregar nuevo catálogos'
						, array('controller' => 'catalogs', 'action'=> 'add'))
				?>
			</li>
			<li><?php
				echo $this->Html->link(
						'Ver catálogos'
						, array('controller' => 'catalogs'))
				?>
			</li>
		</ul>
	</div>

<!-- 	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Eventos
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li><?php
				echo $this->Html->link(
						'Ver todas los eventos.'
						, '/admin/events')
				?>
			</li>
			<li><?php
				echo $this->Html->link(
						'Agregar un nuevo evento.'
						, '/admin/events/add')
				?>
			</li>
		</ul>
	</div> -->

	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Prensa
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li><?php
				echo $this->Html->link(
						'Ver todos los registros.'
						, '/admin/press_registers')
				?></li>
			<li class="disabled"><?php
				echo $this->Html->link(
						'Agregar nuevo tipo de medio.'
						, '/admin/press_registers/add_new_medio_type')
				?>
			</li>
		</ul>
	</div>

	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Salas
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li><?php
				echo $this->Html->link(
						'Ver todas la salas.'
						, '/admin/auditoriums')
				?></li>
			<li><?php
				echo $this->Html->link(
						'Agregar una nueva sala.'
						, '/admin/auditoriums/add')
				?></li>
		</ul>
	</div>

	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Cartelera
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li>
				<?php
				echo $this->Html->link(
						'Agregar cartelera', '/admin/billboards/add');
				?>
			</li>
			<li>
				<?php
				echo $this->Html->link(
						'Ver carteleras', '/admin/billboards/index');
				?>
			</li>
			<li>
				<?php
				echo $this->Html->link(
						'Enviar cartelera', 
						'/admin/billboards/send',
						array('title' => 'Enviar cartelera')
						);
				?>
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
				<?php
				echo $this->Html->link(
						'Agregar Ganador', '/admin/filmoteca_medals/add');
				?>
			</li>
			<li>
				<?php
				echo $this->Html->link(
						'Ver Ganadores', '/admin/filmoteca_medals/index');
				?>
			</li>
		</ul>
	</div>

	<?php
		echo $this->Html->link(
				'Carrusel de Inicio', 
				'/admin/carousels/',
				array('class' => 'btn btn-default'));
	?>

	<?php
	echo $this->Html->link(
			'Administrar Cursos'
			, array('plugin'=>'courses','controller' => 'courses')
			,array(
				'class' => 'btn btn-default'));
	?>

<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Noticias
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li>
				<?php
				echo $this->Html->link(
						'Agregar noticia', '/admin/news/add');
				?>
			</li>
			<li>
				<?php
				echo $this->Html->link(
						'Ver noticias', '/admin/news/detail');
				?>
			</li>
		</ul>
	</div>
</div>