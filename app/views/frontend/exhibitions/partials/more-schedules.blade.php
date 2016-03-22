<div class="extra-schedules">
    @foreach ($schedules->groupByAuditorium() as $scheduleGroup)
    <div class="row">
        <div class="col-md-6">
            <span class="auditorium-name">
                {{ $scheduleGroup->getAuditorium()->getName() }}
            </span>
            <a href="#">@lang('exhibitions.show.see_location')</a>
        </div>
        <div class="col-md-6">
            {{ HTML::schedulesTimeAsList($scheduleGroup->getSchedules()) }}
        </div>
    </div>
    @endforeach
</div>