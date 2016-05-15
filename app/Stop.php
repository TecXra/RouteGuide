<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{

protected $fillable = [
		'stopname',
		'longitude',
		'latitude'
		];


    public function routes()
    {
        return $this->hasMany('App\Route');
    }



    public function searches()
    {
        return $this->hasMany('App\Search');
    }



}
