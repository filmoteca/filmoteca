<?php namespace Resources;

use Filmoteca\Repository\NewsRepository;

class NewsController extends ResourceController
{
	protected $viewBaseName = 'news';

	protected $resourceName = 'news';

	public function __construct(NewsRepository $newsRepository)
	{
		$this->repository = $newsRepository;
	}
}