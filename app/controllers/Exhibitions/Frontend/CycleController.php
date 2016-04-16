<?php

namespace Filmoteca\Exhibitions\Controllers\Frontend;

use Filmoteca\Repository\CyclesRepository;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class CycleController extends Controller
{

    /**
     * @var \Filmoteca\Repository\CyclesRepository
     */
    protected $cyclesRepository;

    /**
     * CycleController constructor.
     * @param \Filmoteca\Repository\CyclesRepository $cyclesRepository
     */
    public function __construct(CyclesRepository $cyclesRepository)
    {
        $this->cyclesRepository = $cyclesRepository;
    }

    public function index()
    {
        $cycles = $this->cyclesRepository->findSinceToday();

        return View::make('exhibitions.frontend.cycles.index', compact('cycles'));
    }

    /**
     * @param string $slug
     */
    public function show($slug)
    {
        $cycle = $this->cyclesRepository->findBySlug($slug);

        if ($cycle === null) {
            App::abort(404);
        }

        return View::make('exhibitions.frontend.cycles.show', compact('cycle'));
    }
}
