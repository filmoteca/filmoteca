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
                    @if ($day->isActive())
                        @if ($day->hasExhibitions())
                            <a class="active" href="{{ $day->getDateInFormatToUrl() }}">{{ $day->getDateInFormatToUrl() }}</a>
                        @else
                            <a class="active">{{ $day->getNumber() }}</a>
                        @endif
                    @else
                        <a class="disabled">{{ $day->getNumber() }}</a>
                    @endif
                </td>
            @endforeach
        </tr>
    @endforeach
</table>
