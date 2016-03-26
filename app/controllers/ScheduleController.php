<?php

use Filmoteca\Repository\SchedulesRepository;
use Carbon\Carbon;

/**
 * Class ScheduleController
 */
class ScheduleController extends BaseController
{
    /**
     * @var SchedulesRepository
     */
    protected $schedulesRepository;

    /**
     * @param SchedulesRepository $schedulesRepository
     */
    public function __construct(SchedulesRepository $schedulesRepository)
    {
        $this->schedulesRepository = $schedulesRepository;
    }

    /**
     * @param $exhibitionId
     * @return \Symfony\Component\HttpFoundation\Response|static
     */
    public function search($exhibitionId)
    {

        if (Input::has('since')) {
            try {
                $since = Carbon::createFromFormat(MYSQL_DATE_FORMAT, Input::get('since'))->setTime(0, 0, 0);
            } catch (InvalidArgumentException $e) {
                return '';
            }
        } else {
            $since = Carbon::today();
        }

        if (Input::has('until')) {
            try {
                $until = Carbon::createFromFormat(MYSQL_DATE_FORMAT, Input::get('until'));
            } catch (InvalidArgumentException $e) {
                return '';
            }
        } else {
            $until = null;
        }

        $schedules = $this->schedulesRepository->findByExhibitionAndDateInterval($exhibitionId, $since, $until);

        return View::make('frontend.exhibitions.partials.more-schedules', compact('schedules'));
    }
}
