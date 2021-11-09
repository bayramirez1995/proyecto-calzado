@extends('adminlte::page')

@section('title', 'Calzado')

@section('content_header')
    <h1>Lo mejor en calzado</h1>
@stop

@section('content')
<form action="{{ route('marca.store')}}" method="post">
@csrf 

<div class="row g-2">
<div class="col-md">
  <label for="Nombre" class="form-label">Nombre de la MARCA </label>
  <input name="Nombre" type="text" class="form-control" id="Nombre" placeholder="Ingrese nombre para el produco">
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
