<?php

namespace App;

//use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravelista\Comments\Commentable;

class Annonce extends Model
{
    use SoftDeletes, Commentable;
    protected $dates = ['deleted_at'];


    protected $guarded = [];

    public function user()
    {
        return $this->belongTo('App\User');
    }
}
