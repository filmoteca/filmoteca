<div class="calendar well">
    <div class="header-programming">
        <h2 class="text-center">@lang('exhibitions.frontend.calendar.title')</h2>
        <h5 class="text-center">@lang('exhibitions.frontend.calendar.subtitle')</h5>
    </div>
    <table class="text-center">
    <caption>@lang('dates.months.' . $calendar->getToday()->format('F') )  
                <?php
                    echo date("Y");
                ?></caption>
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
                    <td class="days">
                        @if ($day->getDate()->month === $date->month)
                            @if ($day->hasExhibitions())
                                <div class="dayactive">
                                <a class="active {{ $day->isToday() ? 'today': '' }}"
                                   title="@lang('exhibitions.frontend.calendar.exhibitions-in-the-day', ['number' => $day->getExhibitionsNumber()]) "
                                   href="{{ URL::route('exhibition.by_date', $day->getDateInFormatToUrl()) }}">
                                    {{ $day->getNumber() }}
                                </a>
                                </div>
                            @else
                                <div class="none-exhibition">
                                <a class="active none-exhibition {{ $day->isToday() ? 'today': '' }}"
                                    title="  No hay función en este día">
                                    {{ $day->getNumber() }}
                                </a>
                                </div>
                            @endif
                        @else
                            <div class="disabled"><span class="disabled">{{ $day->getNumber() }}</span></div>
                        @endif
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>
</div>
