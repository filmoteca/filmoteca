<?php

use Filmoteca\Repository\PageRepository;

class PageController extends BaseController
{
    public function __construct(PageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function show($slugA, $slugB)
    {
        $slug = is_null($slugB)? $slugA : $slugA . '/' . $slugB;

        $page = $this->repository->findBySlug($slug);

        View::name('layouts.default', 'default');

        $viewName = 'pages.' . str_replace('/', '.',$slug);

        return View::of('default')->nest('content', $viewName, compact('page'));
    }
}