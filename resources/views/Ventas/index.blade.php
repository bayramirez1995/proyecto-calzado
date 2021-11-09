@extends('adminlte::page')

@section('title', 'Calzado')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<h1>LISTA DE LAS VENTAS INGRESADAS</h1>    
 

<div class="container">
<h4><a href="{{ route('proveedor.index')}}" class="btn btn-success btn-sm"> Nuevo Genero</a></h4>
    <DIV class="row">
        <div class="col-xl-12">
            <div class="table responsive">
                <table class="table table-hover">
                    <thead>
                    <tr class="bg-info text-dark">
                    
                            <th>cantidad de productos </th>
                            <th>subtotal </th>
                            <th>venta</th>
                            <th>producto</th>
                           
                    </tr>  
                    </thead>
                    <tbody>
                        @foreach($detalle as $g)
                        <tr>
                            <th>{{ $g->id }}</th>
                            <th>{{ $g->Cantidad }}</th>
                            <th>{{ $g->Importe }}</th>
                            <th>{{ $g->nombrep }}</th>
                            
                            
                           
                            <th><a href="" class="btn btn-warning btn-sm">EDITAR</a>
                            <td>
                            <form action="" method="post">
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" onclick="return confirm('Esta seguro de eliminar')" class="btn btn-danger"> Eliminar </button>
                            </form>
                                 </td>
                        </th>

                         
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>


        </div>
    </DIV>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />