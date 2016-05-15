<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appuser extends Model
{
    protected $fillable = [
		'id',
		'MAC',
		'email',
		'name',
		'installingdate'
		];


    public function searches()
    {
        return $this->hasMany('App\Search');
    }



}

