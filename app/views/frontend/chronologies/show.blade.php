{{-- Modal Content --}}
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="myModalLabel">
        <span class="name">{{ $event->year }} </span>
        <p class="name">@lang('exhibitions.frontend.medal.index.entrega'):
        @lang(
        'exhibitions.frontend.medal.index.fecha',
        	[            
            'numeric_year' => $winner->award_date->format('Y'),
        	]
    	)</p>

    </h4>
</div>
<div class="modal-body">
    <div class="description">{{ $event->description }}</div>
</div>
<div class="modal-footer"></div>
