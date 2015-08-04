<?php

namespace Filmoteca\Pagination;

class Results
{
    /**
     * @var int
     */
    protected $total;

    /**
     * @var \Illuminate\Support\Collection
     */
    protected $items;

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    public function __get($name)
    {
        $method = 'get' . ucfirst($name);

        return $this->{$method}();
    }

    public static function make()
    {
        return new static();
    }
}
