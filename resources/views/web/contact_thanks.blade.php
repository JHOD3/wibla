@extends('web.layouts.web')
@section('content')

<section>
    <div class="container position-absolute-md absulute-center py-section-home d-md-flex d-block pt-5 px-md-5 position-absolute center-image-absolute" style="z-index: 99;">
      <div class="col-md-5 col-12 mt-container-home mt-md-5">
        <div class="pl-md-5">
          <h1 class="montserrat text-md-left text-white font42-px text-center"> Contacto</h1>
          <p class="mt-md-4 text-md-left font16-px text-white text-center">Si no encontrás tu consulta acá, podés <br> escribirnos a  <a class="text-white" href="mailto:ayuda@wibla.com">ayuda@wibla.com.ar</a> con tu <br> pregunta, estamos para ayudarte.</p>
        </div>
      </div>
      <div class="col-md-7 col-12 mt-container-home pt-md-5">
        <div class="card d-flex py-5 col-md-10" style="border-radius: 20px;">
          <div class="px-md-5 col-md-12">
            <h2 class="text-primary font40-px">¡Muchas gracias <br>por enviar tu consulta!</h2>
            <p class="font16-px">Nos pondremos en contacto a la brevedad para <br> responder tu dudo o reclamo.</p>
          </div>
        </div>
      </div>
    </div>
    <embed class="mx-auto d-none d-md-block" src="image/header_contacto.svg" style="width:100%"/>
    <embed class="mx-auto d-block d-md-none" src="image/header_contacto-m.svg" style="width:100%"/>
  </section>
  <section class="pt-md-5 py-5 pb-md-0 bg-white">
    <h2 class="text-center font49-px mt-md-4" data-aos="fade-down" data-aos-duration="500">Conoce todos nuestros productos</h2>
    <div class="container mt-md-5 my-5 my-md-0 pt-4 d-flex justify-content-md-center pb-md-5 mx-auto pt-md-4 overflow-x-auto scroll-count" data-aos="fade-up" data-aos-duration="1500">
      <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos" src="image/icono-camara-circulo.svg" alt="" srcset=""/>
        <div class="mt-4">
          <h3 class="font24-px text-center">Rápido!</h3>
        </div>
      </div>
      <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos" src="image/icono-lentes-circulo.svg" alt="" srcset=""/>
        <div class="mt-4">
          <h3 class="font24-px text-center">Ahorrás!</h3>
        </div>
      </div>
      <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos" src="image/icono-proyector-circulo.svg" alt="" srcset=""/>
        <div class="mt-4">
          <h3 class="font24-px text-center">Seguro!</h3>
        </div>
      </div>
      <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos" src="image/icono-memoria-circulo.svg" alt="" srcset=""/>
        <div class="mt-4">
          <h3 class="font24-px text-center">Seguro!</h3>
        </div>
      </div>
      <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos" src="image/icono-accesorio-circulo.svg" alt="" srcset=""/>
        <div class="mt-4">
          <h3 class="font24-px text-center">Seguro!</h3>
        </div>
      </div>
      <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos" src="image/icono-gaming-circulo.svg" alt="" srcset=""/>
        <div class="mt-4">
          <h3 class="font24-px text-center">Seguro!</h3>
        </div>
      </div>
    </div>
    <div class="progress md-progress col-5 px-0 mx-auto d-md-none d-flex" style="height: .5rem !important;">
      <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </section>
@endsection

