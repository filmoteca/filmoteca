<?php

use Filmoteca\Repository\NewsRepository;

class NewsController extends BaseController
{

    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $lastNews = $this->repository->lastNews(20);

        return View::make('frontend.news.index', compact('lastNews'));
    }

    public function show($id)
    {
        $news = $this->repository->find($id);

        $lastNews = $this->repository
            ->lastNews(10)
            ->filter(function ($news) use ($id){

                return $news->id !== $id;
            });


        return View::make('frontend.news.show', compact('news', 'lastNews'));
    }
}
