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
    return "bus edit";

}
public function busupdate($id, Request $request)
{
   return "bus update";
  
}
public function busdelete($id)
{
   
    return "bus delete";
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
            return redirect('stop');
}

public function stopedit($id)
{
    return "stop edit";

}


public function stopupdate($id, Request $request)
{
   return "stop update";
  
}

public function stopdelete($id)
{
   
    return "stop delete";
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
            return redirect('route');
}

public function routeedit($id)
{
    return "route edit";

}


public function routeupdate($id, Request $request)
{
   return "route update";
  
}

public function routedelete($id)
{
   
    return "route delete";
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
            return redirect('search');
}

public function searchedit($id)
{
    return "search edit";

}


public function searchupdate($id, Request $request)
{
   return "search update";
  
}

public function searchdelete($id)
{
   
    return "search delete";
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
            return redirect('appuser');
}

public function appuseredit($id)
{
    return "appuser edit";

}


public function appuserupdate($id, Request $request)
{
   return "appuser update";
  
}

public function appuserdelete($id)
{
   
    return "appuser delete";
}



}
