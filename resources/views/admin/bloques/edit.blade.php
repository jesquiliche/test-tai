@extends('adminlte::page') {{-- Extiende la plantilla "adminlte::page" --}}

@section('title', 'Tablero') {{-- Define el título de la página --}}

@section('content_header') {{-- Define la cabecera de la página --}}
    <h1>Editar bloque</h1>
@stop

@section('content') {{-- Define el contenido principal de la página --}}
    <div class="card">
        <div class="card-body">
            {{-- Genera un formulario de actualización de bloque utilizando el modelo $bloque --}}
            {!! Form::model($bloque,['route' => ['admin.bloque.update',$bloque],'method'=>'put']) !!}
                {{-- Define un campo de texto para el nombre del bloque --}}
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, [
                        'class' => 'form-control',
                        'placeholder' => 'Ingrese el nombre del bloque'
                    ]) !!}
                    
                    {{-- Muestra un mensaje de error si hay un error de validación para el campo nombre --}}
                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    
                </div>
                
                {{-- Define un campo de texto para la descripción del bloque --}}
                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripcion') !!}
                    {!! Form::text('descripcion', null, [
                        'class' => 'form-control',
                        'placeholder' => 'Ingrese la descripción bloque'
                    ]) !!}
                    
                    {{-- Muestra un mensaje de error si hay un error de validación para el campo descripcion --}}
                    @error('descripcion')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    
                </div>
                
                {{-- Define el botón de envío del formulario --}}
                {!! Form::submit('Actualizar bloque', [
                    'class'=>'btn btn-primary'
                ]) !!}
                
            {!! Form::close() !!} {{-- Cierra el formulario --}}
        </div>
    </div>
@stop

