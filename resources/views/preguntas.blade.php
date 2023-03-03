@extends('layout.layout')

@section('title', 'Página de inicio')

@section('content')
    <br />
    <br />
    <br />
    <div class="container mx-auto mt-4 py-4">
        <br />
        <h2 class="text-center">{{ $titulo }}</h2>
        @php
            $x = 0;
        @endphp
        <form action="{{ route('corrector') }}" method="POST">
            @csrf
            @foreach ($preguntas as $pregunta)
                @php
                    $x++;
                @endphp

                <div class="card mt-2 col-md-8 mx-auto p-3">

                    <div class="card-header">
                        <h6><strong>{{ $x }}. {{ $pregunta->pregunta }}</strong></h6>
                        <input type="hidden" name="texto{{ $x }}" value="{{ $pregunta->pregunta }}">
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="pregunta{{ $x }}" value="{{ $pregunta->id }}"; <input
                            type="hidden" name="respuesta{{ $x }}" value="x">
                        <input type="radio" name="respuesta{{ $x }}" value="a"> a)
                        <i>{{ $pregunta->a }}</i>
                        <input type="hidden" name="a{{ $x }}" value="{{ $pregunta->a }}">
                        <input type="hidden" name="b{{ $x }}" value="{{ $pregunta->b }}">
                        <input type="hidden" name="c{{ $x }}" value="{{ $pregunta->c }}">
                        <input type="hidden" name="d{{ $x }}" value="{{ $pregunta->d }}">
                        @if ($pregunta->respuesta == 'a')
                            <input type="hidden" name="correcta{{ $x }}" value="{{ $pregunta->a }}">
                        @endif
                        <br />
                        <input type="radio" name="respuesta{{ $x }}" value="b" class=><i> b)
                            {{ $pregunta->b }}</i>
                        @if ($pregunta->respuesta == 'b')
                            <input type="hidden" name="correcta{{ $x }}" value="{{ $pregunta->b }}">
                        @endif
                        <br />
                        <input type="radio" name="respuesta{{ $x }}" value="c"><i> c)
                            {{ $pregunta->c }}</i>
                        @if ($pregunta->respuesta == 'c')
                            <input type="hidden" name="correcta{{ $x }}" value="{{ $pregunta->c }}">
                        @endif
                        <br />
                        <input type="radio" name="respuesta{{ $x }}" value="d"><i> d)
                            {{ $pregunta->d }}</i>
                        @if ($pregunta->respuesta == 'd')
                            <input type="hidden" name="correcta{{ $x }}" value="{{ $pregunta->d }}">
                        @endif


                    </div>
                </div>
            @endforeach
            <input type="number" name="registros" value="{{ $x }}">;
            <div class="container col-lg-8 text-center py-2 mt-3 mx-auto">
                <input type="submit" class="btn btn-danger text-center" value="Corregir">
            </div>
        </form>
    </div>

@endsection
