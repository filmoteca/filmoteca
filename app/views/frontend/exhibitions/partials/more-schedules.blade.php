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
        @foreach ($schedules->groupByAuditorium() as $scheduleGroup)
            @foreach ($scheduleGroup->getSchedules()->groupByDate() as $index => $dateSchedules)
                @foreach ($dateSchedules as $dayIndex => $schedule)
                    <tr>
                        @if ($index == 0 && $dayIndex == 0)
                            <td rowspan="{{ $scheduleGroup->getSchedules()->count() }}">
                                <span class="auditorium-name">
                                    {{ $scheduleGroup->getAuditorium()->getName() }}
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