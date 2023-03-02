
  @extends('layout.layout')

@section('title', 'Página de inicio')

@section('content')     
     <br/>
     <br/>
     
     
    <br/>
    <br/>
     <div class="card col-lg-4 mx-auto mt-4">
        <div class="card-body">
          <h5  class="text-center">Formulario de contacto</h5>
          <form class="form-floating">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Introduce tu nombre">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Introduce tu email">
            </div>
            <div class="form-group">
              <label for="mensaje">Mensaje</label>
              <textarea class="form-control" id="mensaje" rows="3" placeholder="Escribe tu mensaje"></textarea>
            </div>
            <button type="submit" class="btn btn-danger mt-2">Enviar</button>
          </form>
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      

@endsection

