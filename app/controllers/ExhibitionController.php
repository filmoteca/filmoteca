<?php

use Carbon\Carbon;
use Filmoteca\Repository\ExhibitionsRepository;
use Filmoteca\Models\Exhibitions\Auditorium;
use Filmoteca\ExhibitionsManager;

/**
 * Class ExhibitionController
 */
class ExhibitionController extends BaseController
{
    const DATE_FORMAT = 'j-n-Y';

    /**
     * @var ExhibitionsRepository
     */
    protected $repository;

    /**
     * @var ExhibitionsManager
     */
    protected $manager;

    /**
     * @param ExhibitionsRepository $exhibitionRepository
     * @param ExhibitionsManager $exhibitionsManager
     */
    public function __construct(ExhibitionsRepository $exhibitionRepository, ExhibitionsManager $exhibitionsManager)
    {
        $this->repository   = $exhibitionRepository;
        $this->manager      = $exhibitionsManager;
    }

    public function index()
    {
        $today = Carbon::now();

        $interval = array(
            Carbon::createFromDate($today->year, $today->month, 1)->toDateString(),
            Carbon::createFromDate(
                $today->year,
                $today->month,
                $today->daysInMonth
            )->toDateString()
        );

        $exhibitions = $this
            ->repository
            ->search('date', $interval);

        $auditoriums = Auditorium::all(array('id', 'name'));

        $icons = $this->manager->getIcons($exhibitions);

        $weeks = array();

        return View::make(
            'frontend.exhibitions.app',
            compact(
                'exhibitions',
                'auditoriums',
                'icons',
                'weeks'
            )
        );
    }

    public function collection($humanDate)
    {
        $englishDate = $this->manager->convertMonthFromHumanToNumber($humanDate);

        try {
            $date = Carbon::createFromFormat(self::DATE_FORMAT, $englishDate);
        } catch (InvalidArgumentException $e) {
            $date = Carbon::now()->format(self::DATE_FORMAT);

            return Redirect::action(get_class($this) . '@collection')
                ->withInput('humanDate', $date)
                ->with('warning', Lang::get('exhibitions.errors.invalid-date'));
        }

        $viewData = [
            'exhibitions' => $this->repository->findByDate($date),
            'date' => str_replace('-', ' ', $humanDate)
        ];

        return View::make('frontend.exhibitions.collection', $viewData);
    }

    /**
     * @param string $by
     */
    public function search($by)
    {
        $exhibitions = $this->repository
            ->search($by, Input::get('value'));

        return View::make('exhibitions.search-result', $exhibitions);
    }

    /**
     * Esta acción crea una vista con los detalles de una exhibición,
     * estableciendo un layout para peticiones ajax y otro para peticiones
     * no-ajax.
     * @param  Integer $id Id de un entero
     * @return view Una vista que depende de la solicitud (ajax o )
     */
    public function detail($id)
    {
        $exhibition = $this->repository->search('id', $id);

        //Extend Request;
        $isJson = stristr(Request::header('Accept'), 'application/json');

        $layout = (Request::ajax() || $isJson) ? 'layouts.modal' : 'layouts.default';

        return View::make('frontend.exhibitions.partials.details', compact('exhibition', 'layout'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function detailHistory($id)
    {

        $exhibition = $this->repository->search('id', $id);

        return View::make('frontend.exhibitions.detail-history', compact('exhibition'));
    }

    public function detailHome($id)
    {

        $exhibition = $this->repository->search('id', $id);

        return View::make('frontend.exhibitions.partials.details', compact('exhibition'));
    }

    public function history()
    {

        return View::make('frontend.exhibitions.history');
    }

    public function find()
    {

        $fields = [];
        $fieldsNames = ['title', 'director'];

        foreach ($fieldsNames as $name) {
            if (Input::has($name)) {
                $fields[$name] = Input::get($name);
            }
        }

        $resources = $this->repository->findByTitleDirector($fields);

        return View::make('frontend.exhibitions.history')->with('resources', $resources);

    }
}
