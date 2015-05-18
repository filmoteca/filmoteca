<div class="flm-section the-last">
	<div class="content">

		<div class="header">
			<h4>RESCATE Y RESTAURACIÓN</h4>
			<span>Conoce nuestras actividades</span>
		</div>

		<div role="tabpanel">
            <ul class="nav nav-tabs" role="tablist">
                @for ($i=1; $i<=3; $i++)
                    @if (isset($advertisements['rescate-y-restauracion-' . $i]))
                        <li role="presentation" class="{{ $i === 1? 'active': '' }}">
                            <a href="#video-{{ $i  }}"
                               aria-controls="{{ $advertisements['rescate-y-restauracion-' . $i]->title }}"
                               role="tab"
                               data-toggle="tab">
                                {{ $advertisements['rescate-y-restauracion-' . $i]->title }}
                            </a>
                        </li>
                    @endif
                @endfor
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                @for ($j=1; $j<=3; $j++)
                    @if (isset($advertisements['rescate-y-restauracion-' . $j]))
                        <div role="tabpanel" class="tab-pane {{ $j === 1? 'active': '' }}" id="video-{{ $j }}">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    {{ Str::limit($advertisements['rescate-y-restauracion-' . $j]->description, 120) }}
                                    <span class="see-more">
                                        <a href="{{ $advertisements['rescate-y-restauracion-' . $j]->link }}">Leer más</a>
                                    </span>
                                </li>

                                <div class="video-preview">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        {{ $advertisements['rescate-y-restauracion-' . $j]->embed }}
                                    </div>
                                </div>
                            </ul>
                        </div>
                    @endif
                @endfor
            </div>
		</div>
	</div>
</div>