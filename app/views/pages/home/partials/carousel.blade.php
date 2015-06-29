<div class="flm-section carousel">
    <div class="content">
        <div class="main-carousel">
            @if (isset($carousels['home']))
                @foreach ($carousels['home']->carousel_images as $image)
                    <div>
                        <a href="{{ $image->link }}">
                            <img src="{{ Config::get('administrator::administrator.cms_upload_url') . $image->image }}"
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