<?php namespace Filmoteca\Models;

use Eloquent;

class Page extends Eloquent
{
    protected $fillable = ['title', 'slug', 'body'];

    public function getLinkAttribute(){

        return '/cms/page/' . $this->slug;
    }
}