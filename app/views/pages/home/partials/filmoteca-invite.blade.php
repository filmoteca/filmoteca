<div class="flm-section the-last">
	<div class="content">

		<div class="header">
			<h4>Filmoteca invita</h4>
			<span>Participa con nosotros</span>
		</div>

		<div role="tabpanel">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                @for ($i=1; $i<=3; $i++)
                    @if (isset($advertisements['filmoteca-invita-' . $i]))
                        <li role="presentation" class="{{ $i === 1? 'active': '' }}">
                            <a href="#filmoteca-invita-{{ $i }}"
                               aria-controls="{{ $advertisements['filmoteca-invita-' . $i]->title }}"
                               role="tab"
                               data-toggle="tab">
                                {{ $advertisements['filmoteca-invita-' . $i]->title }}
                            </a>
                        </li>
                    @endif
                @endfor
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                @for ($j=1; $j<=3; $j++)
                    @if (isset($advertisements['filmoteca-invita-' . $j]))
                        <div role="tabpanel" class="tab-pane {{ $j === 1? 'active': '' }}" id="filmoteca-invita-{{ $j }}">
                            <a href="{{ $advertisements['filmoteca-invita-' . $j]->link }}">
                                <img src="{{ Config::get('administrator::administrator.cms_upload_url') . $advertisements['filmoteca-invita-' . $j]->poster }}"
                                     alt="{{ $advertisements['filmoteca-invita-' . $j]->description }}"
                                     title="{{ $advertisements['filmoteca-invita-' . $j]->description }}"
                                     class="img-responsive">
                            </a>
                        </div>
                    @endif
                @endfor
            </div>

	    </div>
	</div>
</div>