@extends('layouts.app')

@section('contenido')


<main>
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md">
                <h2 class="text-center">
                    <b>¿Qué es Urban Envios?</b>
                </h2>
                <h4 class="texto-cuerpo text-center">
                    Una empresa joven dedicada a conectar a los usuarios que necesitan realizar el envio de algún paquete o pagar una factura
                    pero no quieren salir de su casa o estan con poco tiempo para esperar y necesitan contar con la tranquilidad de que su dinero estara a salvo y de que su pedido llegara a tiempo.
                </h4>
            </div>
            <div class="col-md">
                <figure class="figure">
                    <img src="{{ asset('imagenes/img/motito-conductor-logo.png') }}" class="figure-img img-fluid rounded" alt="imagen">
                    <figcaption class="figure-caption text-xs-right">
                       
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-6 text-center">
            <h2><b>¿Qué ofrecemos?</b></h2>
        </div>
        
    </div>
    <div class="container container-fluid">
            <div class="row">
              <div class="col-md columna">
                <div class="media">
                    <img class="imagen align-self-center mr-3" src="{{ asset('imagenes/img/pago-mano.png') }}" alt="Generic placeholder image">
                        <div class="media-body texto-cuerpo">
                          <h4 class="mt-0"><b>CONFIANZA</b></h4>
                          <p>Podrás confiar en nuestro equipo de trabajo para realizar las tediosas filas que se deben realizar al ir a hacer un trámite en alguna dependencia pública o privada.</p>
                          <p>Y contarás con la seguridad de que el dinero que entregues para abonar las facturas o los paquetes que quieras realizar estaran a salvo, ya que nuestro equipo de trabajo se compone de personas íntegras y honestas.</p>
                        </div>
                    </div>
              </div>
              <div class="col-md columna">
                    <div class="media">
                            <img class="imagen align-self-center mr-3" src="{{ asset('imagenes/img/seguridad.png') }}" alt="Generic placeholder image">
                                <div class="media-body texto-cuerpo">
                                  <h4 class="mt-0"><b>SEGURIDAD</b></h4>
                                  <p>La seguridad de saber que los tramites que debe realizar nuestro servimoto, los hará como si tu los estuvieras haciendo.</p>
                                </div>
                            </div>
              </div>
            
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md columna">
                <div class="media">
                    <img class="imagen align-self-center mr-3" src="{{ asset('imagenes/img/mapa-ubicacion-movil.png') }}" alt="Generic placeholder image">
                        <div class="media-body texto-cuerpo">
                          <h4 class="mt-0"><b>UBICACION</b></h4>
                          <p>Nuestros servimotos tienen sus ubicaciones activas el 100% del tiempo, por lo tanto podrás saber en donde se encuentra el cadete que está realizando tu pedido, solo ingresando a la aplicación</p>
                          
                        </div>
                    </div>
              </div>
              <div class="col-md columna">
                    <div class="media">
                            <img class="imagen align-self-center mr-3" src="{{ asset('imagenes/img/delivery.png') }}" alt="Generic placeholder image">
                                <div class="media-body texto-cuerpo">
                                  <h4 class="mt-0"><b>TRANQUILIDAD Y RAPIDEZ</b></h4>
                                  <p>Pensando en tu tranquiliad contamos con todos los datos del cadete que realiza tu trámite o lleva tu pedido ingresando al perfil del mismo.</p>
                                  <p>Ademas, sabemos que el tiempo es oro, por eso mientras usted disfruta de su tiempo nuestro equipo de especialistas en cadeteria se encarga de sus trámites.</p>
                                </div>
                            </div>
              </div>
            
            </div>
          </div>
</main>

      
@endsection