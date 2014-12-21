<div class="modal-header">
	<h3 class="modal-title">
		<button type="button" class="close" ng-click="$close()">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>

		@{{ winner.name }} (@{{ winner.award_date }})

	</h3>
</div>
<div class="modal-body">

   <img ng-src="@{{ winner.photo }}">
	@{{ winner.biography }}

</div>
<div class="modal-footer">
</div>