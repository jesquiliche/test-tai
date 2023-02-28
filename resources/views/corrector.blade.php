@extends('layout.layout')

@section('title', 'Página de inicio')




@section('content')
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container">
  <div class="row">
    @php
    $data = $preguntas;
       
    $num_preguntas = $data->registros;
    @endphp
    @for ($i = 1; $i <= $num_preguntas; $i++)
    <div class="row">
      <div class="card col-lg-8 mt-2 mx-auto">
        <div class="card-header">
          <b>{{ $i }}. {{$data->{'texto'.$i} }}</b>
        </div>
        <div class="card-body">
            <i>a) {{$data->{'a'.$i} }}</i><br/>
            <i>b) {{$data->{'b'.$i} }}</i><br/>
            <i>c) {{$data->{'c'.$i} }}</i><br/>
            <i>d) {{$data->{'d'.$i} }}</i><br/>
        
            Correcta : 
            @php
                $respuesta=$data->correcta;
            @endphp
            
           
         
        <p> <b> Correcta: {{ $data->{'correcta'.$i} }}</b></p>
          <p><b>Respuesta seleccionada: {{ $data->{'respuesta'.$i} }}</b></p>
        </div>
      </div>
    </div>
    @endfor
  </div>
</div>
@endsection


