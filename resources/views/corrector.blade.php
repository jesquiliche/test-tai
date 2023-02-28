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
                                $aciertos=0;
                            @endphp
                            
                            @if ($seleccionada == 'a')
                                <i class="fas fa-arrow-left"></i><b> Seleccionada</b>
                            @endif
                            @if ($correcta == $respuesta)
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
                                <b><i class="fas fa-check"></i> Correcta</b><br />
                            @endif



                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <br />
    <br />
@endsection
