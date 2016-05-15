<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $fillable = ['stop_id','bus_id','user_id'];

public function Route()
    {
        return $this->belongsTo('App\Route');

    }

public function Appuser()
    {
        return $this->belongsTo('App\Appuser');

    }

}
