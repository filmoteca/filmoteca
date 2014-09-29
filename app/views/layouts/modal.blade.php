<div class="modal-header">
	<h3 class="modal-title">
		<span class="glyphicon glyphicon-remove pull-right btn-link"
	 		ng-click="$close()"></span>

		@yield('title')

	</h3>
</div>
<div class="modal-body">

    @yield('content')

</div>
<div class="modal-footer">
	@yield('footer')
</div>