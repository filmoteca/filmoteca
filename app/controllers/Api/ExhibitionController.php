<?php 

namespace Api;

use Filmoteca\Repository\ExhibitionsRepository;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use \Illuminate\Pagination\Factory as Paginator;

/**
 * Class ExhibitionController
 * @package Api
 */
class ExhibitionController extends ApiController
{
    const FIRST_PAGE        = 1;

    const ITEMS_PER_PAGE    = 15;

    /**
     * @param ExhibitionsRepository $repository
     */
	public function __construct(ExhibitionsRepository $repository, Paginator $paginator)
	{
		$this->repository = $repository;
        $this->paginator = $paginator;
	}

    /**
     * @return \Illuminate\Pagination\Paginator
     */
	public function index()
	{
		$itemsPerPage 	= self::ITEMS_PER_PAGE;
		$page 			= Input::has('page')? Input::get('page') : self::FIRST_PAGE;
        $query          = Input::has('query')? Input::get('query') : '';
		$exhibitions    = $this->repository->paginate($page, $query, $itemsPerPage);

		return $this->paginator->make($exhibitions->items, $exhibitions->total, $itemsPerPage);
	}

    /**
     * @return \Illuminate\Http\JsonResponse
     */
	public function store()
	{
		$data = Input::except('_token');

		$model = $this->repository->store( $data );

		return Response::json($model, 200);
	}

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
	public function destroy($id)
    {
		$resource = $this->repository->find($id);

		$resource->destroy($id);

		return Response::json($resource, 200);
	}

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
	public function show($id)
	{
		$resource = $this->repository->find($id);

		return Response::json($resource, 200);
	}

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
	public function update($id)
	{
		$data = Input::except('_token');

		$this->repository->update($id, $data);

		return Response::json([], 200);
	}
}
