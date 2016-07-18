<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Appuser;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AppUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "appuser";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "appuser create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $appuser= Appuser::create($request->all());
      $appuser->save();
      return redirect('appuser');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return "app user show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $appuser = Appuser::findOrFail($id);
      return view('fyp.appuseredit',compact('appuser'));

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
      $appuser = AppUser::findOrFail($id);
      $input = $request->all();
      $appuser->fill($input)->save();
      return redirect('appuser'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $appuser = AppUser::findOrFail($id);
      $appuser->delete();
      return redirect('appuser');    }
}
