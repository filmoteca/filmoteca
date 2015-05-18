<?php namespace Filmoteca\Models\Home;

use Eloquent;

class CarouselImage extends Eloquent
{
    public function carousel()
    {
        return $this->belongsTo('Filmoteca\Models\Home\Carousel');
    }
}