<?php

namespace Filmoteca\Repository;

interface PageableRepositoryInterface
{
    const FIRST_PAGE        = 1;

    const ITEMS_PER_PAGE    = 15;

    /**
     * @param int $page
     * @param string $query
     * @param int $itemsPerPage
     * @return \Filmoteca\Pagination\Results
     */
    public function paginate($page = self::FIRST_PAGE, $query = '', $itemsPerPage = self::ITEMS_PER_PAGE);
}
