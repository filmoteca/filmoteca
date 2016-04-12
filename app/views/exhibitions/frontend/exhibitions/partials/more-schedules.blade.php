<div class="extra-schedules">
    <table class="table table-bordered">
        @foreach ($schedules->groupByAuditorium() as $auditoriumSchedules)
            @foreach ($auditoriumSchedules->groupByDate() as $index => $dateSchedules)
                @foreach ($dateSchedules as $dayIndex => $schedule)
                    <tr>
                        @if ($index == 0 && $dayIndex == 0)
                            <td class="col-md-4 bold" rowspan="{{ $auditoriumSchedules->count() }}">
                                <span class="auditorium-name">
                                    <a href="#">
                                        {{ $schedule->getAuditorium()->getName() }}
                                    </a>
                                </span>
                            </td>
                        @endif
                        @if ($dayIndex == 0)
                            <td class="col-md-4 highlight" rowspan="{{ $dateSchedules->count() }}">
                                {{ $schedule->getEntry()->format('d/m/Y') }}
                            </td>
                        @endif
                        <td class="col-md-4">
                            {{ $schedule->getEntry()->format('H:i') }} hrs.
                        </td>
                    </tr>
                @endforeach
            @endforeach
        @endforeach
    </table>
</div>
