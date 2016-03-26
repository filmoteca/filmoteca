<div class="calendar">
    <div class="header">
        <h2 class="text-center">@lang('exhibitions.frontend.calendar.title')</h2>
        <h5 class="text-center">@lang('exhibitions.frontend.calendar.subtitle')</h5>
    </div>
    <table class="text-center">
    <caption>@lang('dates.months.' . $calendar->getToday()->format('F') )</caption>
        <tr>
            <th>
                @lang('dates.week-days-abbreviations.Su')
            </th>
            <th>
                @lang('dates.week-days-abbreviations.Mo')
            </th>
            <th>
                @lang('dates.week-days-abbreviations.Tu')
            </th>
            <th>
                @lang('dates.week-days-abbreviations.We')
            </th>
            <th>
                @lang('dates.week-days-abbreviations.Th')
            </th>
            <th>
                @lang('dates.week-days-abbreviations.Fr')
            </th>
            <th>
                @lang('dates.week-days-abbreviations.Sa')
            </th>
        </tr>
        @foreach ($calendar->getWeeks() as $week)
            <tr>
                @foreach($week->getDays() as $day)
                    <td>
                        @if ($day->getDate()->month === $date->month)
                            @if ($day->hasExhibitions())
                                <a class="active {{ $day->isToday() ? 'today': '' }}"
                                   title="@lang('exhibitions.frontend.calendar.exhibitions-in-the-day', ['number' => $day->getExhibitionsNumber()]) "
                                   href="{{ URL::route('exhibition.by_date', $day->getDateInFormatToUrl()) }}">
                                    {{ $day->getNumber() }}
                                </a>
                            @else
                                <a class="active none-exhibition {{ $day->isToday() ? 'today': '' }}">
                                    {{ $day->getNumber() }}
                                </a>
                            @endif
                        @else
                            <span class="disabled">{{ $day->getNumber() }}</span>
                        @endif
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>
</div>
