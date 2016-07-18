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
		'endtime',
        'busnumber'
		];



//    public function routes()
//    {
//        return $this->hasMany('App\Route');
//    }
     
     public function stops()
    {
        return $this->belongsToMany('App\Stop', 'routes','bus_id','stop_id');
    }




    public function searches()
    {
        return $this->hasMany('App\Search');
    }




            
}

