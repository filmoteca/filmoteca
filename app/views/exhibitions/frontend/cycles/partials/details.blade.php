<div class="panel panel-default">
    <div class="panel-heading text-center">
        <a href="{{ URL::route('exhibitions.frontend.cycle.show', ['slug' => $cycle->getSlug()]) }}">
            {{ $cycle->getName() }}
        </a>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-sm-3">
                <div class="facebook-badges">

                </div>
                <div class="image">
                    <a href="{{ URL::route('exhibitions.frontend.cycle.show', ['slug' => $cycle->getSlug()]) }}">
                        <img src="{{ $cycle->getImage()->getMediumImageUrl()}}"
                             title="{{ $cycle->getName() }}"
                             class="img-responsive"
                             alt="{{ $cycle->getName() }}">
                    </a>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="period">
                    @lang('exhibitions.frontend.cycle.index.period', [
                        'since_day' => $cycle->getSince()->day,
                        'since_month' => trans('dates.months.' . $cycle->getSince()->format('F')),
                        'until_day' => $cycle->getUntil()->day,
                        'until_month' => trans('dates.months.' . $cycle->getUntil()->format('F')),
                        'until_year' => $cycle->getUntil()->year
                        ]
                    )
                </div>
                <div class="description">
                    {{ $cycle->getDescription() }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="see-more">
                    <a href="{{ URL::route('exhibitions.frontend.cycle.show', ['slug' => $cycle->getSlug()])}}">
                        @lang('exhibitions.frontend.cycle.index.see-exhibitions')
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
