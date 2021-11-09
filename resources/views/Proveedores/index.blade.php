

@extends('adminlte::page')
@section('title', 'Calzado')


@section('content_header')
    <h1>LISTA DE PROVEEDORES</h1>
@stop

@section('content')
 
 

<div class="container">
<h4><a href="{{ route('proveedor.create')}}" class="btn btn-success btn-sm"> Nuevo Genero</a></h4>
    <DIV class="row">
        <div class="col-xl-12">
            <div class="table responsive">
                <table class="table table-hover">
                    <thead>
                    <tr class="bg-info text-dark">
                    
                            <th>ID </th>
                            <th>Nombre </th>
                            <th>Direccion </th>
                            <th>Telefono</th>
                            <th>Terminos de pago</th>
                            <th>Email</th>
                    </tr>  
                    </thead>
                    <tbody>
                        @foreach($proveedores as $g)
                        <tr>
                            <th>{{ $g->id }}</th>
                            <th>{{ $g->Nombre }}</th>
                            <th>{{ $g->Direccion }}</th>
                            <th>{{ $g->Telefono }}</th>
                            <th>{{ $g->TerminosDePago }}</th>
                            <th>{{ $g->Correo }}</th>
                           
                            <th><a href="" class="btn btn-warning btn-sm">EDITAR</a>
                            <td>
                            <form action="{{route('proveedor.destroy',$g->id)}}" method="post">
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