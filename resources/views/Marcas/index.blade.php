@extends('adminlte::page')

@section('title', 'Calzado')

@section('content_header')
    <h1>LISTA DE MARCAS</h1>
@stop

@section('content')
  
 

<div class="container">
<h4><a href="{{ route('marca.create')}}" class="btn btn-success btn-sm">CREAR MARCA</a></h4>
    <DIV class="row">
        <div class="col-xl-12">
            <div class="table responsive">
                <table class="table table-hover">
                    <thead>
                    <tr class="bg-info text-dark">
                            
                            <th>Todas Nuestas Marcas </th>     
                    </tr>  
                    </thead>
                    <tbody>
                        @foreach($mark as $g)
                        <tr>
                        
                         
                        <th>{{$g->Nombre}}</th>
                           
                            
                           
                            <th><a href="" class="btn btn-warning btn-sm">EDITAR</a>
                            <td>
                            <td>
                            <form action="{{route('marca.destroy',$g->id)}}" method="post">
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