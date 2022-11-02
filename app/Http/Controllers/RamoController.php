<?php

namespace App\Http\Controllers;

use App\Models\Ramo;
use App\Http\Requests\StoreRamoRequest;
use App\Http\Requests\UpdateRamoRequest;

class RamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ramo::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRamoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRamoRequest $request)
    {
        $ramo = new Ramo();
        $ramo->nombre = $request->nombre;
        $ramo->save();
        return $ramo;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ramo  $ramo
     * @return \Illuminate\Http\Response
     */
    public function show(Ramo $ramo)
    {
        return $ramo;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRamoRequest  $request
     * @param  \App\Models\Ramo  $ramo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRamoRequest $request, Ramo $ramo)
    {
        $ramo->nombre = $request->nombre;
        $ramo->save();
        return $ramo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ramo  $ramo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ramo $ramo)
    {
        $ramo->delete();
    }
}
