@extends('adminlte::page')

@section('title', 'Calzado')

@section('content_header')
    <h1>ingrese nuevo producto</h1>
@stop

@section('content')
<form action="{{ route('producto.store')}}" method="post">
@csrf 

<div class="row g-2">
<div class="col-md">
  <label for="NombreProducto" class="form-label">Nuevo Producto</label>
  <input name="NombreProducto" type="text" class="form-control" id="NombreProducto" placeholder="Ingrese nombre para el produco">
</div>
<div class="col-md">
  <label for="PrecioCompra" class="form-label">Precio de Compra</label>
  <input name="PrecioCompra" type="number" class="form-control" id="PrecioCompra" placeholder="Agregar costo">
</div>
</div>

<div class="row g-2">
<div class="col-md">
  <label for="PrecioVenta" class="form-label"> Precio publico</label>
  <input name="PrecioVenta" type="number" class="form-control" id="PrecioVenta" placeholder="Precio al publico">
</div>
<div class="col-md">
  <label for="Talla" class="form-label">Talla</label>
  <input name="Talla" type="number" class="form-control" id="Talla" placeholder="Agregar costo">
</div>
</div>

<div class="row g-2">
<div class="col-md">
  <label for="Stock" class="form-label"> STOCK</label>
  <input name="Stock" type="number" class="form-control" id="Stock" placeholder="Precio al publico">
</div>
<div class="col-md">
  <label for="Color" class="form-label">Color</label>
  <input name="Color" type="text-area" class="form-control" id="Color" placeholder="Agregar costo">
</div>
</div>


<div class="row g-2">
<div class="col-md">
  <label for="FechaIngreso" class="form-label">Fecha</label>
  <input name="FechaIngreso" type="date" class="form-control" id="FechaIngreso" >
</div>
<div class="col-md">
  <label for="Descripcion" class="form-label">Descripcion</label>
  <input name="Descripcion" type="text-area" class="form-control" id="Descripcion" >
</div>
</div>


<div class="row g-2">
<div class="col-md">
<label for="id_Marca" class="form-label">Marca</label>
  <select name="id_Marca" class="form-select" aria-label="Default select example">
  @foreach ($marcas as $a)
        <option value="{{$a->id}}">{{$a->Nombre}}</option>
        @endforeach
</select>
</div>

<div class="row g-2">
    <div class="col-md">
    <label for="id_Proveedores" class="form-label">Proveedor</label>
    <select name="id_Proveedores" class="form-select" aria-label="Default select example">
    @foreach ($proveedores as $b)
        <option value="{{$b->id}}">{{$b->Nombre}}</option>
        @endforeach
    </select>
    </div>
    
    </div>
   
</div>
 

<div class="mb-3">
<button type="subit" class="btn btn-success">Guardar Cambios</button>

</div>

</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
