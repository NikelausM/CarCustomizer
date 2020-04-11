<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DesiredAutomobile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class DesiredAutomobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    }

    /**
     * Update the exterior color of the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateExteriorColor(Request $request, $id)
    {
      Log::info('exterior color id: '.$request->exteriorColorId);
      $desiredAutomobile = DesiredAutomobile::where('id',$id)->first();
      Log::info('$desiredAutomobile: '.$desiredAutomobile);
      $desiredAutomobile->exterior_color_id = $request->exteriorColorId;
      Log::info('new $desiredAutomobile: '.$desiredAutomobile);
      $desiredAutomobile->save();
      return redirect()->route('user.show',Auth::user());
    }

    /**
     * Update the interior color of the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateInteriorColor(Request $request, $id)
    {
      $desiredAutomobile = DesiredAutomobile::where('id',$id)->first();
      $desiredAutomobile->interior_color_id = $request->interiorColorId;
      $desiredAutomobile->save();
      return redirect()->route('user.show',Auth::user());
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
