@extends('layout.layout')

@section('title', 'Página de inicio')

@section('content')     
     <br/>
     <br/>
     <br/>
     <br/>
     
        @foreach($preguntas as $pregunta)
        
            <div class="card mt-2 col-md-6 mx-auto p-2  ">
                <div class="card-title p-2">
                    <h6><strong>{{$pregunta->pregunta}}</strong></h6>
                </div>
            <div class="card-body p-2">
            <form>
                
                       
                <input type="radio" name="respuesta" value="a"> a) <i>{{$pregunta->a}}</i>
                @if ($pregunta->respuesta=="a")
                    <b> <i class="fas fa-check"></i> Correcta</b>
                @endif
                <br/>
                <input type="radio" name="respuesta" value="b"> b)<i> {{$pregunta->b}}</i>
                @if ($pregunta->respuesta=="b")
                    <b><i class="fas fa-check"></i>  Correcta</b>
                @endif
                <br/>
                <input type="radio" name="respuesta" value="c"><i> c) {{$pregunta-> c}}</i>
                @if ($pregunta->respuesta=="c")
                    <b><i class="fas fa-check"></i>  Correcta</b>
                @endif
                <br/>
                <input type="radio" name="respuesta" value="d"><i> d) {{$pregunta-> d}}</i> 
                @if ($pregunta->respuesta=="d")
                    <b><i class="fas fa-check"></i>  Correcta</b>
                @endif
                <br/>
                <input type="submit" class="btn btn-primary">
                <br/>
            </form>
            </div>
        </div>

        @endforeach
        


        @endsection

