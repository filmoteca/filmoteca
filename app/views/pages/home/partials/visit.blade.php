<div class="flm-section visit">
	<div class="content">
		<div class="header">
			<h4>Visita nuestros micrositios</h4>
		</div>

		<div class="visit-carousel">
            @if (isset($carousels['visita']))
                @foreach( $carousels['visita']->carousel_images as $image)
                    <div>
                        <a href="{{ $image->link }}" target="blank">
                            <img src="{{  Config::get('administrator::administrator.cms_upload_url') . $image->image }}"
                                 alt="{{ $image->title }}"
                                 title="{{ $image->description }}"
                                 class="img-responsive">
                        </a>
                    </div>
                @endforeach
            @endif
		</div>
	</div>
</div>