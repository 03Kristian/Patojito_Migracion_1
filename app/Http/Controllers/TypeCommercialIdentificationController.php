<?php

namespace App\Http\Controllers;

use App\Models\Type_commercial_identification;
use Illuminate\Http\Request;

class TypeCommercialIdentificationController extends Controller
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
        //formulario
        return view('Type_commercial_id.create');
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
        $commercial_identification= new Type_commercial_identification();
        $commercial_identification->tipo_comercial = $request->tipo_comercial;
        $commercial_identification->tipo_identificacion_comercial = $request->tipo_identificacion;
        $commercial_identification->save();

        return 'guardado';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type_commercial_identification  $type_commercial_identification
     * @return \Illuminate\Http\Response
     */
    public function show(Type_commercial_identification $type_commercial_identification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type_commercial_identification  $type_commercial_identification
     * @return \Illuminate\Http\Response
     */
    public function edit(Type_commercial_identification $type_commercial_identification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type_commercial_identification  $type_commercial_identification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type_commercial_identification $type_commercial_identification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type_commercial_identification  $type_commercial_identification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type_commercial_identification $type_commercial_identification)
    {
        //
    }
}
