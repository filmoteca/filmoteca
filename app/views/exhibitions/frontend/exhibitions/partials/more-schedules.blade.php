<div class="extra-schedules">
    <table class="table table-bordered">
        <tr>
            <th>
                @lang('exhibitions.show.fields.auditorium')
            </th>
            <th>
                @lang('exhibitions.show.day')
            </th>
            <th>
                @lang('exhibitions.show.schedules')
            </th>
        </tr>
        @foreach ($schedules->groupByAuditorium() as $auditoriumSchedules)
            @foreach ($auditoriumSchedules->groupByDate() as $index => $dateSchedules)
                @foreach ($dateSchedules as $dayIndex => $schedule)
                    <tr>
                        @if ($index == 0 && $dayIndex == 0)
                            <td rowspan="{{ $auditoriumSchedules->count() }}">
                                <span class="auditorium-name">
                                    {{ $schedule->getAuditorium()->getName() }}
                                </span>
                                <a href="#">
                                    @lang('exhibitions.show.see_location')
                                </a>
                            </td>
                        @endif
                        @if ($dayIndex == 0)
                            <td rowspan="{{ $dateSchedules->count() }}">
                                {{ $schedule->getEntry()->format('d/m/Y') }}
                            </td>
                        @endif
                        <td>
                            {{ $schedule->getEntry()->format('H:i') }} hrs.
                        </td>
                    </tr>
                @endforeach
            @endforeach
        @endforeach
    </table>
</div>
