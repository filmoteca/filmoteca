<div class="modal-header">
	<h3 class="modal-title">
		<button type="button" class="close" ng-click="$close()">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>

		@{{ winner.name }} (@{{ winner.award_date | date : 'd-M-yyyy'}})

	</h3>
</div>

<div class="modal-body">
    <div><img ng-src="@{{ winner.photo }}" class="img-responsive center-block thumbnail"></div>
    <div ng-bind-html="winner.biography"></div>
</div>

<div class="modal-footer"></div>