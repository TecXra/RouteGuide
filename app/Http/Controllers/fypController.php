<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bus;
use App\Stop;
use App\Search;
use App\Route;
use App\Appuser;
use App\Http\Controllers\Controller;

class fypController extends Controller
{
    

public function busdata()
{
	return "bus";
}


public function buscreate()
{
	return "buscreate";
}



public function busstore(Request $request)
{
		$bus= Bus::create($request->all());
            $bus->save();
            $imageName = $bus->id . '_list.' .
            $request->file('farelist')->getClientOriginalExtension();
            $imageCompletePath = '/farelist/'. $imageName ;
            $request->file('farelist')->move(base_path() . '/public/farelist/', $imageName);
            $bus->update(array('farelist' => $imageCompletePath));

            return redirect('bus');

}




}
