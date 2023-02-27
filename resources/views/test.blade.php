@extends('layout.layout')

@section('title', 'Página de inicio')

@section('content')
    <br />
    <br />
    <br />
    <br />
    <div class="container col-lg-10 text-center mt-5">
        <h2>Seleccione tipo de test</h2>
       <div class="row mt-5">
        
    <div class="card col-lg-3 mx-auto p-5">
        <form action="{{ route('preguntasbloque') }}" method="POST">
            @csrf
            <div class="card-title">
                <h5>Test por Bloque</h5>
            </div <div class="form-group">
            <label for="bloque_id">Bloque</label>
            <select class="form-control" id="bloque_id" name="bloque_id">
                @foreach ($bloques as $bloque)
                   
                    <option value="{{ $bloque->id}}">{{$bloque->nombre}} - {{ $bloque->descripcion }}</option>
                    
                @endforeach

            </select>
            <br />
            <input type="submit" class="btn btn-primary mt-2" value="Hacer test">
        </form>
    </div>
    <div class="card col-lg-3 mx-auto p-5">
        <form action="{{ route('preguntas') }}" method="POST">
            @csrf
            <div class="card-title">
                <h5>Test por tema</h5>
            </div <div class="form-group">
            <label for="bloque_id">Tema</label>
            <select class="form-control" id="bloque_id" name="categoria_id">
                @foreach ($bloques as $bloque)
                    <optgroup label="{{ $bloque->nombre }}">
                        @foreach ($bloque->categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </optgroup>
                @endforeach

            </select>
            <br />
            <input type="submit" class="btn btn-primary mt-2" value="Hacer test">
        </form>
    </div>
    <div class="card col-lg-3  mx-auto p-5">
        <form action="{{ route('preguntasgeneral') }}" method="POST">
            @csrf
            <div class="card-title">
                <h5>Test general</h5>
            </div <div class="form-group">
            <div class="card-body">
                Test general.
            </div>
            <br/>
            <input type="submit" class="btn btn-primary mt-2" value="Hacer test">
        </form>
    </div>
   
    </div>

    </div>


@endsection
