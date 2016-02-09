@section('breadcrumbs')
	<li>
		<a href="/pages/libreria/libreria">
			Libreria
		</a>
	</li>
	<li class="active">
		Catálogo
	</li>
@stop

@section('sidebar')
  @include('elements.menus.libreria', array('selected' => 2))
@stop


@section('content')

    <h1>Catálogo</h1>

    <div class="col-xs-12 col-sm-12">
	    <div align="center" class="img-responsive" >
	    	<br>
			<iframe  style="width:100%;height:475px"  src="http://online.fliphtml5.com/bsrf/xwtv/#p=1" 
				seamless="seamless" scrolling="no" frameborder="0"
				allowtransparency="true" allowfullscreen="true">
			</iframe>
		</div>
	</div>
	

@stop