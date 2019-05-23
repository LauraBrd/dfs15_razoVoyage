<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function voyage()
        {
            return $this->belongsToMany('App\Voyage');
        }
}
