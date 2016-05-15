<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $fillable = ['stop_id','bus_id','user_id'];

public function Bus()
    {
        return $this->belongsTo('App\Bus');

    }

public function Stop()
    {
        return $this->belongsTo('App\Stop');
    }

public function Appuser()
    {
        return $this->belongsTo('App\Appuser');

    }

}
