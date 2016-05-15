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
    


// Bus CRUD

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
public function busedit($id)
{
      $bus = Bus::findOrFail($id);
      return view('fyp.busedit',compact('bus'));


}
public function busupdate($id, Request $request)
{
      $bus = Bus::findOrFail($id);
      $input = $request->all();
      $bus->fill($input)->save();
      return redirect('bus');
  
}
public function busshow($id)
{
      return "specific bus";
}

public function busdelete($id)
{
   
      $bus = Bus::findOrFail($id);
      $bus->delete();
      return redirect('bus');
}




//Stop CRUD

public function stopdata()
{
      return "stop";
}
public function stopcreate()
{
      return "stop create";
}
public function stopstore(Request $request)
{

            $stop= Stop::create($request->all());
            $stop->save();
            return redirect('stop');
}

public function stopshow($id)
{
      return "specific stop";
}

public function stopedit($id)
{
      $stop = Stop::findOrFail($id);
      return view('fyp.stopedit',compact('stop'));

}


public function stopupdate($id, Request $request)
{
      $stop = Stop::findOrFail($id);
      $input = $request->all();
      $stop->fill($input)->save();
      return redirect('stop');
}

public function stopdelete($id)
{
   
      $stop = Bus::findOrFail($id);
      $stop->delete();
      return redirect('stop');
}







//Route CRUD

public function routedata()
{
      return "route";
}
public function routecreate()
{

      return "route create";
      
}
public function routestore(Request $request)
{

      $route= Route::create($request->all());
      $route->save();
      return redirect('route');
}

public function routeedit($id)
{
      $route = Route::findOrFail($id);
      return view('fyp.routeedit',compact('route'));

}

public function routeshow($id)
{
      return "specific route";
}

public function routeupdate($id, Request $request)
{
      $route = Route::findOrFail($id);
      $input = $request->all();
      $route->fill($input)->save();
      return redirect('search'); 
}

public function routedelete($id)
{
   
    
      $route = Route::findOrFail($id);
      $route->delete();
      return redirect('route');
}






//Search CRUD

public function searchdata()
{
      return "search";
}
public function searchcreate()
{
      return "search create";
}
public function searchstore(Request $request)
{

      $search= Search::create($request->all());
      $search->save();
      return redirect('search');
}

public function searchedit($id)
{
      $search = Search::findOrFail($id);
      return view('fyp.searchedit',compact('search'));

}


public function searchshow($id)
{
      return "specific search";
}
public function searchupdate($id, Request $request)
{
      $search = Search::findOrFail($id);
      $input = $request->all();
      $search->fill($input)->save();
      return redirect('search');  
}

public function searchdelete($id)
{
   
      $search = Serach::findOrFail($id);
      $search->delete();
      return redirect('search');
}




//AppUser CRUD


public function appuserdata()
{
      return "appuser";
}
public function appusercreate()
{
      return "appuser create";
}
public function appuserstore(Request $request)
{
      $appuser= Appuser::create($request->all());
      $appuser->save();
      return redirect('appuser');
}

public function appuseredit($id)
{
      $appuser = Appuser::findOrFail($id);
      return view('fyp.appuseredit',compact('appuser'));


}


public function appusershow($id)
{ 
      return "app user show";
}
public function appuserupdate($id, Request $request)
{
 
      $appuser = AppUser::findOrFail($id);
      $input = $request->all();
      $appuser->fill($input)->save();
      return redirect('appuser'); 
}

public function appuserdelete($id)
{
   
    
      $appuser = AppUser::findOrFail($id);
      $appuser->delete();
      return redirect('appuser');
}



}
