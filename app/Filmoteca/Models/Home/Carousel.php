<?php namespace Filmoteca\Models\Home;

use Eloquent;

class Carousel extends Eloquent
{
    public function carouselImages()
    {
        return $this->hasMany('Filmoteca\Models\Home\CarouselImage');
    }
}