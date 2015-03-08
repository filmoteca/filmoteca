<?php 

namespace Filmoteca\Models;

use \Eloquent;

class Country extends Eloquent{

    public function films()
    {
        return $this->belongsToMany('Filmoteca\Models\Film');
    }
}