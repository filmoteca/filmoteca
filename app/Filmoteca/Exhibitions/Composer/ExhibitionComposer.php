<?php

namespace Filmoteca\Exhibitions\Composer;

use Carbon\Carbon;
use Illuminate\View\View;
use Filmoteca\Exhibition\ExhibitionsManager;

/**
 * Class ExhibitionComposer
 * @package Filmoteca\Exhibitions\Composer
 */
class ExhibitionComposer
{
    /**
     * ExhibitionComposer constructor.
     * @param ExhibitionsManager $manager
     */
    public function __construct(ExhibitionsManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @param $view
     */
    public function compose(View $view)
    {
        $viewData = $view->getData();

        $date = isset($viewDate['date'])? $viewData['date']: Carbon::today();
        $calendar = $this->manager->getCalendar(Carbon::today());

        $view->with('calendar', $calendar);
        $view->with('date', $date);
    }
}
