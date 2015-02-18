<?php

namespace Api;

use Filmoteca\Models\Exhibitions\Schedule;
use Input;
use Response;

class ScheduleController extends ApiController
{
    public function __construct(Schedule $schedule)
    {
        $this->schedule = $schedule;
    }

    public function store($exhibition_id)
    {
        $data = Input::all();
        $data['exhibition_id'] = $exhibition_id;
        $data['auditorium_id'] = $data['auditorium']['id'];

        return $this->schedule->create($data);
    }

    public function update($id)
    {
        $data = Input::all();
        $data['auditorium_id'] = $data['auditorium']['id'];

        $schedule = $this
            ->schedule
            ->findOrFail($id)
            ->fill($data)
            ->save();

        return Response::json($schedule,200);
    }

    public function destroy($id)
    {
        $this->schedule->findOrFail($id)->delete();

        return Response::json([],200);
    }
}
