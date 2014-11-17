<div class="modal-header">
	<h3 class="modal-title">
		<span class="glyphicon glyphicon-remove pull-right btn-link"
	 		ng-click="$close()"></span>

		@{{ winner.name }}

	</h3>
</div>
<div class="modal-body">

   <img ng-src="@{{ winner.photo }}">
	@{{ winner.biography }}

</div>
<div class="modal-footer">
	<button class="btn btn-primary" ng-click="$close()">OK</button>
	<button class="btn btn-warning" ng-click="$dismiss()">Cancel</button>
</div>