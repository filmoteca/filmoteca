<?php namespace Filmoteca\Repository;

use Filmoteca\Models\Home\Carousel;

class CarouselsRepository
{
    protected $homeCarouselsNames = [
        'home',
        'visita',
        'recomendaciones'
    ] ;

    public function __construct(Carousel $carousel)
    {
        $this->carousel = $carousel;
    }

    public function findToHome()
    {
        $carousels = [];

        foreach ($this->homeCarouselsNames as $slug) {
            $tmp = $this->carousel
                ->where('slug',$slug)
                ->with('carouselImages')
                ->first();

            $carousels[$slug] = $tmp;
        }

        return $carousels;
    }
}