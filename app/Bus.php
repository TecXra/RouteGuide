<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    		
protected $fillable = [
		'sourceterminal',
		'destinationterminal',
		'companyname',
		'farelist',
		'status',
		'starttime',
		'endtime'
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

