@extends('layout.layout')

@section('title', 'Página de inicio')

@section('content')     
     <br/>
     <br/>
     
     

     <div class="imagen-con-texto">
      <img src="images/portada.jpg" class="card-img-top p-2" alt="..." loading="lazy">
      <div class="texto">
        <h2>Oposiciones a Técnico Auxiliar Informática </h2>
        <p>Aplicación de test online</p>
      </div>
    </div>
  <div class="container text-center col-lg-10 py-3 mb-3">
   
   
      
   
    <div class="row justify-content-center py-4 ">
      
      <div class="col-md-4 mb-4">
        <div class="card cards-container">
          <img src="images/portada1.jpg" class="card-img-top p-2" alt="..." loading="lazy">
          <div class="card-body">
            <h5 class="card-title">Facil y comodo seguir</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
         <div class="card cards-container">
          <img src="images/portada2.jpg" class="card-img-top p-2" alt="..." loading="lazy">
          <div class="card-body">
            <h5 class="card-title">Temario actualizado</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
         <div class="card cards-container">
          <img src="images/portada3.jpeg" class="card-img-top p-2" alt="..." loading="lazy">
          <div class="card-body">
            <h5 class="card-title">Más de 1000 preguntas</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
    </div>
  
  <!-- Agregamos los archivos JS de Bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection

