<?php

namespace Filmoteca\Transformers;

use Illuminate\Support\Collection;

abstract class Transformer
{
    /**
     * @param mixed $item
     * @return mixed
     */
    public function transform($item)
    {
        return $item;
    }

    /**
     * @param mixed $items
     * @return mixed
     */
    public function transformCollection(Collection $items)
    {
        return $items;
    }
}
