@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1>Lista de Bloques</h1>
@stop

@section('content')
    
    .<div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col" colspan="2">Acción</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($bloques as $bloque)
                  <tr>
                    <th scope="row">{{$bloque->id}}</th>
                    <td>{{$bloque->nombre}}</td>
                    <td>{{$bloque->descripcion}}</td>
                    <td><a href="#" class="btn btn-primary sm">Editar</a></td>
                    <td><a href="#" class="btn btn-danger sm">Borrar</a></td>
                  </tr>
                @endforeach
                </tbody>
              </table>
           
        </div>
    </div>
    

    </div>
        
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
