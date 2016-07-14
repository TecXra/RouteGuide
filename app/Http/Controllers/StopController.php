<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stop;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stop=Stop::all();
        return $stop;
        return view('stop.index',compact('stop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $stop= Stop::create($request->all());
            $stop->save();
            return redirect('stop');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        // $stop = Stop::findOrFail($id);   
      //      $stop = Stop::with('routes')->findOrFail($id);

        //    $stop = DB::table()

  $stop = Stop::with('buses')->findOrFail($id);

return  $stop;

//      return view('stop.show',compact('stop'));

    }







    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $stop = Stop::findOrFail($id);
      return view('stop.edit',compact('stop'));

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
      $stop = Stop::findOrFail($id);
      $input = $request->all();
      $stop->fill($input)->save();
      return redirect('stop');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $stop = Stop::findOrFail($id);
      $stop->delete();
      return redirect('stop');
    }



    public function stoproute($id)
    {
        $stop = Stop::findOrFail($id)->routes;
        
        return $stop;

        return view('site.busroute',compact('bus','route'));
    }






}
