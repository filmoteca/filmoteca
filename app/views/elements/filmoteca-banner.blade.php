<div class="higher-links">
	<ul>
		<li>
			<a href="{{URL::route('home')}}">
				<span class="icon-print"></span>
			</a>
		</li>
		<li>
			<a href="{{URL::route('home')}}">
				<span class="icon-accessibility"></span>
			</a>
		</li>
		<li>
		{{
			HTML::link(
				'/contacts/add',
				'Contacto');
			}}
		</li>

		<li><a href="#">Mapa del Sitio</a></li>
		<li>
			{{ HTML::link(
				'/pages/directorio',
				'Directorio')
				}}
		</li>
		<li>
			{{ HTML::link('/', 'Inicio') }}
		</li>
	</ul>
</div>

<div class="banner-filmoteca">
	<a href="http://www.unam.mx/">
		<span class="logo-unam"></span>
	</a>
	<div class="definicion unam">
		<span>
			Universidad Nacional<br>
			Autónoma de México
		</span>
	</div>
	<a href="{{URL::route('home')}}">
		<span class="logo-filmoteca"></span>
	</a>
	<div class="definicion filmoteca">
		<span>
			Dirección General de<br>
			Actividades Cinematográficas
		</span>
	</div>
</div>