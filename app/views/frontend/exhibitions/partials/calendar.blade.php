<div class="calendar">
    <div class="header">
        <h3>@lang('exhibitions.frontend.calendar.title')</h3>
        <h4>@lang('exhibitions.frontend.calendar.subtitle')</h4>
    </div>
    <table>
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
                                <a class="active"
                                   title="@lang('exhibitions.frontend.calendar.exhibitions-in-the-day', ['number' => $day->getExhibitionsNumber()]) "
                                   href="{{ $day->getDateInFormatToUrl() }}">{{ $day->getNumber() }}</a>
                            @else
                                <a class="active">{{ $day->getNumber() }}</a>
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
