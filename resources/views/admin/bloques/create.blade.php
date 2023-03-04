@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1>Mostrar create Bloques</h1>
@stop

@section('content')
@section('content')
<div class="card">
	<div class="card-body">
		{!! Form::open(['route' => 'admin.bloque.store']) !!}
		
			<div class="form-group">
				{!! Form::label('nombre', 'Nombre') !!}
				{!! Form::text('nombre', null, [
					'class' => 'form-control',
					'placeholder' => 'Ingrese el nombre del bloque'
				]) !!}
				
				@error('nombre')
					<span class="text-danger">{{ $message }}</span>
				@enderror
				
			</div>
			
			<div class="form-group">
				{!! Form::label('descripcion', 'Descripcion') !!}
				{!! Form::text('descripcion', null, [
					'class' => 'form-control',
					'placeholder' => 'Ingrese la descripción bloque'
				]) !!}
				
				@error('descripcion')
					<span class="text-danger">{{ $message }}</span>
				@enderror
				
			</div>
			
			{!! Form::submit('Crear bloque', [
				'class'=>'btn btn-primary'
			]) !!}
			
		{!! Form::close() !!}
	</div>
</div>
@stop
 

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
