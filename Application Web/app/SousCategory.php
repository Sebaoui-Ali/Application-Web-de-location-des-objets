<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousCategory extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongTo('App\Category');

    }
}
