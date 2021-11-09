<?php

namespace App\Http\Controllers;

use App\Models\detalleventa;
use Illuminate\Http\Request;

class DetalleventaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $detalle=detalleventa::join('productos', 'detalleventa.id_productos','=','productos.id')
        ->select('detalleventa.id','detalleventa.Cantidad','detalleventa.Importe','productos.NombreProducto as nombrep')->get();
        //$generos=genero::all();
        //$generos=genero::where('nombre','Accion')->get();
        return view ('Ventas.index', compact('detalle'));
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
     * @param  \App\Models\detalleventa  $detalleventa
     * @return \Illuminate\Http\Response
     */
    public function show(detalleventa $detalleventa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detalleventa  $detalleventa
     * @return \Illuminate\Http\Response
     */
    public function edit(detalleventa $detalleventa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detalleventa  $detalleventa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detalleventa $detalleventa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detalleventa  $detalleventa
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalleventa $detalleventa)
    {
        //
    }
}
