<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              $bus=Bus::all();
      
        return "buses data";
        return view('fyp.busdata',compact('bus'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             return "create bus";
              return view('fyp.buscreate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $bus = Bus::findOrFail($id);
          
          return "specific bus data";
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
              return "bus data edit page";
              return view('fyp.busedit',compact('bus'));

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}










public function busedit($id)
{
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
 }

public function busdelete($id)
{
   
      $bus = Bus::findOrFail($id);
      $bus->delete();
      return redirect('bus');
}






