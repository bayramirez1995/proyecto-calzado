@extends('adminlte::page')

@section('title', 'Calzado')

@section('content_header')
    <h1>PRODUCTOS INGRESADOS</h1>
@stop

@section('content')
  
 

<div class="container">
<h4><a href="{{ route('producto.create')}}" class="btn btn-success btn-sm"> Nuevo Producto</a></h4>
    <DIV class="row">
        <div class="col-xl-12">
            <div class="table responsive">
                <table class="table table-hover">
                    <thead>
                    <tr class="bg-info text-dark">
                    
                            
                            <th>Nombre </th>
                            <th>Precio venta</th>
                            <th>Talla</th>
                            <th>Cantidad</th>
                            <th>Color</th>
                            <th>Marca</th>
                    </tr>  
                    </thead>
                    <tbody>
                        @foreach($detalle as $g)
                        <tr>
                        
                         
                        <th>{{$g->NombreProducto}}</th>
                            <th>{{$g->PrecioVenta}}</th>
                            <th>{{$g->Talla}}</th>
                            <th>{{$g->Stock}}</th>
                            <th>{{$g->Color}}</th>
                            <th>{{$g->nombrem}}</th>
                            
                           
                            <th><a href="" class="btn btn-warning btn-sm">EDITAR</a>
                            <td>
                            <td>
                            <form action="{{route('producto.destroy',$g->id)}}" method="post">
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
