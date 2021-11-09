<?php

namespace App\Http\Controllers;

use App\Models\marca;
use App\Models\producto;
use App\Models\proveedor;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $detalle=producto::join('marca', 'productos.id_Marca','=','marca.id')
        ->select('productos.id','productos.NombreProducto','productos.PrecioVenta','productos.Talla','productos.Stock','productos.Color','marca.Nombre as nombrem')->get();
        return view ('Productos.index', compact('detalle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores=proveedor::all();
        $marcas=marca::all();
        return view ('Productos.create', compact('proveedores','marcas'));
    
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
        $product= new producto();
        $product->NombreProducto=$request->input('NombreProducto');
        $product->PrecioCompra=$request->input('PrecioCompra');
        $product->PrecioVenta=$request->input('PrecioVenta');
        $product->Talla=$request->input('Talla');
        $product->Stock=$request->input('Stock');
        $product->Color=$request->input('Color');
        $product->FechaIngreso=$request->input('FechaIngreso');
        $product->Descripcion=$request->input('Descripcion');
        $product->id_Marca=$request->input('id_Marca');
        $product->id_Proveedores=$request->input('id_Proveedores');
        $product->save();
        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index');
    
    }
}
