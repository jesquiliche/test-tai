@extends('layout.layout')

@section('title', 'Página de inicio')

@section('content')
    <br />
    <br />
    <br />
    <div class="container mx-auto mt-4 py-4">
        <br/>
        <h2 class="text-center">{{ $titulo }}</h2>
        @php
            $x = 0;
        @endphp
        <form action="{{route('corrector')}}" method="POST">
        @csrf
        @foreach ($preguntas as $pregunta)
            @php
                $x++;
            @endphp
            
                <div class="card mt-2 col-md-8 mx-auto p-3">

                    <div class="card-title">
                        <h6><strong>{{ $x }}. {{ $pregunta->pregunta }}</strong></h6>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="pregunta{{$pregunta->id}}" value="{{$pregunta->id}}"";
                        <input type="hidden" name="respuesta{{ $x }}" value="x">
                        <input type="radio" name="respuesta{{ $x }}" value="a"> a)
                        <i>{{ $pregunta->a }}</i>
                        @if ($pregunta->respuesta == 'a')
                            <b> <i class="fas fa-check"></i> Correcta</b>
                        @endif
                        <br />
                        <input type="radio" name="respuesta{{ $x }}" value="b"> b)<i> {{ $pregunta->b }}</i>
                        @if ($pregunta->respuesta == 'b')
                            <b><i class="fas fa-check"></i> Correcta</b>
                        @endif
                        <br />
                        <input type="radio" name="respuesta{{ $x }}" value="c"><i> c) {{ $pregunta->c }}</i>
                        @if ($pregunta->respuesta == 'c')
                            <b><i class="fas fa-check"></i> Correcta</b>
                        @endif
                        <br />
                        <input type="radio" name="respuesta{{ $x }}" value="d"><i> d) {{ $pregunta->d }}</i>
                        @if ($pregunta->respuesta == 'd')
                            <b><i class="fas fa-check"></i> Correcta</b>
                        @endif


                    </div>
            
            

        
    </div>
    @endforeach
    <div class="container col-lg-4 text-center py-2">
        <input type="submit" class="btn btn-primary text-center">
    </div>
</form>
    </div>

@endsection
