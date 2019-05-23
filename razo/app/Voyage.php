<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    public function bilan()
    {
        return $this->hasOne('App\Bilan');
    } 

    public function post()
    {
        return $this->hasMany('App\Post');
    }

    public function categorie()
    {
        return $this->belongsToMany('App\Categorie');
    }
}
