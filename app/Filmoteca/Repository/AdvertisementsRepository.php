<?php namespace Filmoteca\Repository;

use Filmoteca\Models\Home\Advertisement;

class AdvertisementRepository
{
    public function __construct(Advertisement $advertisement)
    {
        $this->repository = $advertisement;
    }

    public function all()
    {
        $collection = $this->repository->all();

        $advertisements = [];

        foreach ($collection as $item){
            $advertisements[$item->slug] = $item;
        }

        return $advertisements;
    }
}
