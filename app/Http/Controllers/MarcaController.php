<?php

namespace App\Http\Controllers;

use App\Models\marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mark=marca::all();
        return view ('Marcas.index', compact('mark'));   //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view ('Marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marcas= new marca();
        $marcas->Nombre=$request->input('Nombre');
        $marcas->save();
        return redirect()->route('marca.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(marca $marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(marca $marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, marca $marca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(marca $marca)
    {
        $marca->delete();
        return redirect()->route('marca.index');
        //
    }
}
