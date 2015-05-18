<div class="flm-section carousel">
    <div class="content">
        <div class="main-carousel">
            @foreach ($carousels['home']->carousel_images as $image)
                <div>
                    <div class="caption">
                        <div id="title">
                            {{ $image->title }}
                        </div>
                        <br>
                        <div id="text">
                            {{ $image->description }}
                        </div>
                    </div>
                    <a href="{{ $image->link }}">
                        <img src="{{ Config::get('administrator::administrator.cms_upload_url') . $image->image }}"
                             alt="{{ $image->title }}"
                             title="{{ $image->description }}"
                             class="img-responsive">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
   
</div>