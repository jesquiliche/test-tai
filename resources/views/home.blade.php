@extends('layout.layout')

@section('title', 'Página de inicio')

@section('content')
    <br />
    <br />



    <div class="imagen-con-texto">
        <img src="images/portada.jpg" class="card-img-top p-2" alt="..." loading="lazy">
        <div class="texto">
            <h2>Oposiciones a Técnico Auxiliar Informática </h2>
            <p>Personaliza tu preparación, podrás hacer test por temas y materias. Sin límites. ¡Haz los test que quieras,
                cuando quieras!</p>
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
        <br />
        <br />
        <br />
        <br />
        <div class="card col-lg-10 py-4 mx-auto mt-4">
            <div class="card-title">
                <h5>Contenido del temario</h5>
            </div>
            <div class="card-body">
                El temario se dividirá en 36 temas estructurados en cuatro bloques.
                El primero de ellos se centra en materias legislativas y jurídicas y
                los tres restantes versan sobre contenido informático.
            </div>
        </div>.
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-warning">
                        <div class="text-center py-2">
                            <img src="images/chico1.jpg" alt="imagen" class="rounded-circle p-2">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card 1</h5>
                            <p class="card-text">This is a yellow card with some text.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <div class="text-center ">
                                <img src="images/chico2.jpg" alt="imagen" class="rounded-circle">
                            </div>
                            <h5 class="card-title">Card 2</h5>
                            <p class="card-text">This is another yellow card with some more text.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning">
                        <div class="text-center py-3">
                            <img src="images/chica.jpg" alt="imagen" class="rounded-circle">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card 3</h5>
                            <p class="card-text">This is a third yellow card with some additional text.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Agregamos los archivos JS de Bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>

    </div>
    <div>
    </div>
    </body>

    </html>

@endsection
