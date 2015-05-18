<div class="flm-section expositions">
    <div class="content">
        @if (isset($advertisements['centro-de-documentacion']))
            <div class="header">
                <h4>
                    {{ $advertisements['centro-de-documentacion']->title }}
                </h4>
                <span>
                    {{ Str::limit($advertisements['centro-de-documentacion']->description, 200) }}
                </span>
                <br>
                <span class="see-more">
                    <a href="{{ $advertisements['centro-de-documentacion']->link }}">Ver más</a>
                </span>
            </div>
            <div class="image">
                <img src="{{ Config::get('administrator::administrator.cms_upload_url') . $advertisements['centro-de-documentacion']->poster }}"
                     alt="{{  $advertisements['centro-de-documentacion']->description }}"
                     title="{{  $advertisements['centro-de-documentacion']->description }}"
                     class="img-responsive">
            </div>
        @endif
    </div>
</div>