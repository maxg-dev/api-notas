<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Http\Requests\StoreNotaRequest;
use App\Http\Requests\UpdateNotaRequest;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Nota::all()->load('ramo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNotaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotaRequest $request)
    {
        $nota = new Nota();
        $nota->nombre = $request->nombre;
        $nota->nota = $request->nota;
        $nota->porcentaje = $request->porcentaje;
        $nota->ramo_id = $request->ramo_id;
        $nota->save();
        return $nota;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
        return $nota->load('ramo');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNotaRequest  $request
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotaRequest $request, Nota $nota)
    {
        $nota->nombre = $request->nombre;
        $nota->nota = $request->nota;
        $nota->porcentaje = $request->porcentaje;
        $nota->ramo_id = $request->ramo_id;
        $nota->save();
        return $nota;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nota $nota)
    {
        $nota->delete();
    }
}
