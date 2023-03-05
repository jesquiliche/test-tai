@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1>Lista de Bloques</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.bloque.create')}}" class="btn btn-primary btn-sm">
                Agregar bloque
            </a>
        </div>
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
                            <th scope="row">{{ $bloque->id }}</th>
                            <td>{{ $bloque->nombre }}</td>
                            <td>{{ $bloque->descripcion }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.bloque.edit', $bloque) }}" class="btn btn-primary btn-sm">Editar
                                </a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.bloque.destroy', $bloque) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Eliminar
                                    </button>
                                </form>

                            </td>
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
<script>

    // Agregar confirmación antes de enviar solicitud de eliminación
    const deleteButtons = document.querySelectorAll('.btn-danger');
    deleteButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            const confirmDelete = confirm('Esta apunto de borrar todas las categorias y preguntas asociadas a este bloque ¿Estás seguro que deseas eliminar este bloque?');
            if (confirmDelete) {
                event.target.closest('form').submit();
            }
        });
    });
</script>
@stop
