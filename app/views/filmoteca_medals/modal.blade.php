<div class="modal-header">
	<h3 class="modal-title">
		<span class="glyphicon glyphicon-remove pull-right btn-link"
	 		ng-click="$close()"></span>

		@{{ winner.name }} (@{{ winner.award_date }})

	</h3>
</div>
<div class="modal-body">

   <img ng-src="@{{ winner.photo }}">
	@{{ winner.biography }}

</div>
<div class="modal-footer">
</div>