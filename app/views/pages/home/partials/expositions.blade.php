<div class="flm-section expositions">
    <div class="content">
        @if (isset($advertisements['exposiciones']))
            <div class="header">
                <h4>
                    {{ $advertisements['exposiciones']->title }}
                </h4>
                <span>
                    {{ Str::limit($advertisements['exposiciones']->description, 200) }}
                </span>
                <br>
                <span class="see-more">
                    <a href="{{ $advertisements['exposiciones']->link }}">Ver más</a>
                </span>
            </div>
            <div class="image">
                <img src="{{ Config::get('administrator::administrator.cms_upload_url') . $advertisements['exposiciones']->poster }}"
                     alt="{{ $advertisements['exposiciones']->description }}"
                     title="{{  $advertisements['exposiciones']->description }}"
                     class="img-responsive">
            </div>
        @endif
    </div>
</div>