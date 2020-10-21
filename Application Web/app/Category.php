<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function sous_categories()
    {
        return $this->hasMany('App\SousCategory');
    }
}
