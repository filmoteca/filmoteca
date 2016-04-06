<div class="panel panel-default">
    <div class="panel-heading">
        <a href="{{ URL::route('exhibition.auditorium.show', ['slug' => $auditorium->getSlug()]) }}">
            <span class="name">
                {{ $auditorium->getName() }}
            </span>
            @if ($auditorium->getVenue() !== null)
                <span class="venue">
                    - {{ $auditorium->getVenue()->getName() }}
                </span>
            @endif
        </a>
    </div>

    <div class="panel-body">
        {{-- toggle between the position (left or right) of the auditorium image --}}
        <div class="details {{ $side }}">
            <p>
                <b>@Lang('exhibitions.frontend.auditorium.show.direction'):</b>
                <span>
                    {{ $auditorium->getAddress() }}
                </span>
            </p>
        </div>
        <div class="image {{ $side}}">
            <a href="{{ URL::route('exhibition.auditorium.show', ['slug' => $auditorium->getSlug()]) }}">
                <img src="{{ $auditorium->getImage()->getMediumImageUrl()}}"
                     title="{{ $auditorium->getName() }}"
                     alt="{{ $auditorium->getName() }}">
            </a>
        </div>
    </div>
</div>
