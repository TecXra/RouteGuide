<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use App\Stop;
use App\Route;
use App\Search;
use App\Appuser;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{





// show all buses list

	public function buslist()
	{
		$buses=Bus::all();
		return $buses;
		//return view('site.buslist',compact('buses'));
	}



// show all stops list

	public function stoplist()
	{
		$stops=Stop::all();
	
		return $stops;

		return view('site.stoplist',compact('stops'));
	}




// show specific bus farelist

	public function busfarelist($id)
	{
	    $bus = Bus::findOrFail($id);
	    
      	return view('site.busfarelist',compact('bus'));
	}



// show specific bus route            EAGLE LOADING

	public function busroute($id)
	{
	    $bus = Bus::findOrFail($id)->routes;;
	    
      	return $bus;

      	return view('site.busroute',compact('bus','route'));
	}





	public function busdetail($id)
	{
		$bus = Bus::findOrFail($id);
	    return $bus;
		//return view('site.buslist',compact('buses'));
	}





// buses on specific stop            EAGLE LOADING

	public function stopbus($id)
	{
	    $stop = Stop::findOrFail($id)->routes;
	    return $stop;

      	return view('site.stopbus',compact('stop','buses'));
	}




// nearest stop list      Google API

	public function neareststop()
	{
	    return view('site.neareststop',compact('stop'));
	}



// complete guide  with map    Google API

	public function completeguide()
	{


	    return view('site.completeguide',compact('route'));
	}








}
