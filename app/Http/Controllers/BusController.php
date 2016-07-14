<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BusController extends Controller
{
    
    public function index()
    {
        $buses=Bus::all();
        return $buses;

    }


    public function create()
    {
        return view('bus.create');
    }

    
    public function store(Request $request)
    {
    
        $bus = new Bus($request->except('farelist'));
        $picture = "";
        if(Input::hasFile('farelist'))
        {
            $file = Input::file('farelist');
            $filename = $file->getClientOriginalName();
            $extension = $file -> getClientOriginalExtension();
            $picture = sha1($filename . time()) . '.' . $extension;
        }
        $bus -> farelist = $picture;
        $bus -> save();

        if(Input::hasFile('farelist'))
        {
            $destinationPath = public_path() . '/farelist/buses/'.$bus->id.'/';
            Input::file('farelist')->move($destinationPath, $picture);
        }
            return redirect('bus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $bus = Bus::with('routes')->findOrFail($id);
         $bus = Bus::with('stops')->findOrFail($id);
        return $bus;

        return view('fyp.busedit',compact('bus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bus = Bus::findOrFail($id);
        return view('bus.edit',compact('bus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $picture="";
        if(Input::hasFile('farelist'))
        {
            $file = Input::file('farelist');
            $filename = $file->getClientOriginalName();
            $extension = $file -> getClientOriginalExtension();
            $picture = sha1($filename . time()) . '.' . $extension;
        }
        $bus -> farelist = $picture;
        $bus -> update($request->except('farelist'));

        if(Input::hasFile('farelist'))
        {
            $destinationPath = public_path() . '/farelist/buses/'.$bus->id.'/';
            Input::file('farelist')->move($destinationPath, $picture);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bus = Bus::findOrFail($id);
      $bus->delete();
      return redirect('bus');
    }



    public function busroute($id)
    {
        $bus = Bus::findOrFail($id)->routes;
        
        return $bus;

        return view('site.busroute',compact('bus','route'));
    }




}
