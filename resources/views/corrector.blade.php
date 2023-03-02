@extends('layout.layout')

@section('title', 'Página de inicio')




@section('content')
    <br />
    <br />
    <br />
    <br />
    <br />
    <div class="container">
        <div class="row">
            @php
                $data = $preguntas;
                $aciertos=0;
                $num_preguntas = $data->registros;
            @endphp
            @for ($i = 1; $i <= $num_preguntas; $i++)
                <div class="row">
                    <div class="card col-lg-8 mt-2 mx-auto py-2">
                        <div class="card-header">
                            <h6><strong>{{ $i }}. {{ $data->{'texto' . $i} }}</strong></h6>
                        </div>
                        <div class="card-body">
                            <i>a) {{ $data->{'a' . $i} }}</i>


                            @php
                                $seleccionada = $data->{'respuesta' . $i};
                                $respuesta = $data->{'a' . $i};
                                $correcta = $data->{'correcta' . $i};
                                $correctaL="";
                               
                            @endphp
                            
                            @if ($seleccionada == 'a')
                                <i class="fas fa-arrow-left"></i><b> Seleccionada</b>
                            @endif
                            @if ($correcta == $respuesta)
                                @php
                                    $correctaL="a";
                                @endphp
                                
                                <b><i class="fas fa-check"></i> Correcta</b>
                            @endif
                            <br />
                            <i>b) {{ $data->{'b' . $i} }}</i>
                            @php
                                $respuesta = $data->{'b' . $i};
                                $correcta = $data->{'correcta' . $i};
                            @endphp
                            @if ($seleccionada == 'b')
                                <i class="fas fa-arrow-left"></i><b> Seleccionada</b>
                            @endif
                            @if ($correcta == $respuesta)
                                @php
                                    $correctaL="b";
                                @endphp
                                <b><i class="fas fa-check"></i> Correcta</b>
                            @endif
                            <br />
                            <i>c) {{ $data->{'c' . $i} }}</i>
                            @php
                                $respuesta = $data->{'c' . $i};
                                $correcta = $data->{'correcta' . $i};
                            @endphp
                            @if ($seleccionada == 'c')
                                <i class="fas fa-arrow-left"></i><b> Seleccionada</b>
                            @endif
                            @if ($correcta == $respuesta)
                                @php
                                    $correctaL="c";
                                @endphp
                                <b><i class="fas fa-check"></i> Correcta</b>
                            @endif
                            <br />
                            <i>d) {{ $data->{'d' . $i} }}</i>
                            @php
                                $respuesta = $data->{'d' . $i};
                                $correcta = $data->{'correcta' . $i};
                            @endphp
                          
                            @if ($seleccionada == 'd')
                                <i class="fas fa-arrow-left"></i><b> Seleccionada</b>
                            @endif
                            @if ($correcta == $respuesta)
                                @php
                                    $correctaL="d";
                                @endphp
                       
                                <b><i class="fas fa-check"></i> Correcta</b><br />
                            @endif
                            
                            @if($seleccionada==$correctaL)
                                
                                @php
                                    $aciertos++;
                                    $correctaL="X";
                                @endphp
                            @endif



                        </div>
                    </div>
                </div>
            @endfor
            <div class="card col-lg-4 py-2 mx-auto mt-4 mb-4 text-center">
                <div class="card-header">
                    <b>Resultado</b>
                </div>
                <div class="card-body">
                    
                    <p>Aciertos  {{$aciertos}} de {{$num_preguntas}}</p>
                
               
            
            @php
                $tantoPorCiento=number_format(($aciertos*100/$num_preguntas),2);
            @endphp
            {{$tantoPorCiento}}% de aciertos
        
    </div>
    <div class="container col-lg-6 mx-auto text-center">
    
    
        <a href="{{route('test')}}" class="nav-link btn btn-danger">Hacer otro</a>
    

    

    </div>
    <br />
    <br />
@endsection
