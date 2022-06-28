<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Mall;
use App\Models\Type_commercial_identification;
use Illuminate\Http\Request;

class StoreController extends Controller
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
        $malls = Mall::all();
        $commercial_id = Type_commercial_identification::all();
        return view('Store.create',compact('malls','commercial_id'));
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
        $store = new Store();
        $store->razon_social = $request->razonsocial;
        $store->direccion = $request->direccion;
        $store->telefono1 = $request->telefono;
        $store->celular2 = $request->telefono;
        $store->correo = $request->telefono;
        $store->identificacion_local = $request->telefono;
        /* relaciones */
        $store->id_malls = $request->mall_id;
        $store->id_type_identification = $request->type_identification;
        $store->save();

        return 'Completado';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
    }
}
