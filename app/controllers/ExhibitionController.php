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

    /**
     * @param $humanDate
     * @return mixed
     */
    public function index($humanDate = '')
    {
        if ($humanDate !== '' && substr($humanDate, 0, 1) === '0') {
            App::abort(404);
        }

        try {
            $englishDate = $this->manager->convertMonthFromHumanToNumber($humanDate);
            $date = Carbon::createFromFormat(ExhibitionsManager::DATE_FORMAT, $englishDate);
        } catch (InvalidArgumentException $e) {
            $date = Carbon::today();
        }

        $exhibitions = $this->repository->findByDate($date);

        return View::make('frontend.exhibitions.index', compact('exhibitions', 'date'));
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
