@extends('web.layouts.index')
@section('content')
  <section>
    <div class="container position-absolute-md absulute-center py-section-home d-md-flex d-block pt-5 px-md-5 position-absolute center-image-absolute" style="z-index: 99;">
      <div class="col-md-6 col-12 mt-container-home mt-md-5">
        <div class="pl-md-5">
          <h1 class="montserrat text-md-left text-dark font35-px text-center"> Imagen y Tecnología para</h1>
          <embed class="creadores-text" src="image/creadores_text.svg" type=""/>
        </div>
      </div>
      <div class="col-md-6 col-12 mt-container-home pt-md-5"></div>
    </div>
    <embed class="mx-auto d-none d-md-block" src="image/header_quienes_somos.png" style="width:100%"/>
    <embed class="mx-auto d-block d-md-none" src="image/header_quienes_somos-m.png" style="width:100%"/>
  </section>
  <section>
    <div class="position-absolute center-image-absolute">
      <div class="col-md-8 mx-auto d-block pt-md-5 mt-md-5 mt-4">
        <embed class="vision-text" src="image/nuestra_vision_text.svg" type=""/>
      </div>
      <div class="col-md-7 mx-auto d-block">
        <h2 class="text-secondary text-center font36-px font-weight-400" style="margin-top: -1.9rem;">Queremos inspirarte para que creando <br> y explorando puedas vivir una <br> libre y creativa.</h2>
        <p class="mt-md-5 text-md-left text-center font16-px">WiBla es una empresa de equipamiento tecnológico para fotografía ,video, audio, computación y electrónica. Trabajamos sin intermediarios para asegurarte la mejor calidad de productos, con la tranquilidad de ofrecer garantías oficiales y el mejor precio.</p>
      </div>
      <div class="col-md-6 mx-auto d-block pt-md-3 col-7">
        <h2 class="text-secondary text-center pt-md-5 mt-5 font38-px font-weight-400">Encontrá en Wibla la última información en tecnología y los mejores equipos a un clic.</h2>
      </div>
    </div><img class="d-none d-md-block" src="image/fondo_quienes_somos.png" alt="" style="margin-bottom: -6rem;width: 100%;"/><img class="d-block d-md-none" src="image/fondo_quienes_somos-m.png" alt="" style="margin-bottom: -28px;width: 100%;"/>
  </section>
@endsection