@extends('web.layouts.web')
@section('content')
  <section class="bg-section-home">
    <div class="container position-absolute-md absulute-center py-section-home d-md-flex d-block pt-5 px-md-5 position-absolute center-image-absolute" style="z-index: 99;">
      <div class="col-md-5 col-12 mt-container-home mt-4">
        <div class="pl-md-5">
          <h1 class="montserrat text-md-left text-center text-white font43-px">Organismos Gubernamentales</h1>
        </div>
      </div>
      <div class="col-md-7 col-12 mt-container-home d-none d-md-block"></div>
    </div>
    <embed class="mx-auto d-md-block d-none" src="image/header_1.svg" style="width:100%"/>
    <embed class="mx-auto d-block d-md-none" src="image/header_1-m.svg" style="width:100%"/>
  </section>
  <section class="pt-md-5 py-5 pb-md-0">
    <div class="container pt-md-5 col-md-9 mx-auto d-md-flex">
      <div class="col-md-7">
        <p>Ofrecemos un servicio robusto para Instituciones estatales, abarcando proyectos de mediana y gran escala para el gobierno nacional, provincial y municipal.</p>
        <p>Asegurando junto a nuestro equipo de expertos un equipamiento tecnológico en fotografía,video, audio, computación y electrónica, con beneficios exclusivos para el sector.</p>
      </div>
      <div class="col-md-5">
        <h3 class="ml-md-5">¿Por qué Wibla?</h3>
        <ul class="content-caja-li pl-md-5 pl-0">
          <li><i class="far fa-check mr-3 text-warning"></i>Asesoramiento Integral</li>
          <li><i class="far fa-check mr-3 text-warning"></i>Precios competitivos</li>
          <li><i class="far fa-check mr-3 text-warning"></i>Calidad y garantía asegurada</li>
          <li><i class="far fa-check mr-3 text-warning"></i>Atención personalizada</li>
          <li><i class="far fa-check mr-3 text-warning"></i>Financiamiento</li>
        </ul>
      </div>
    </div>
  </section>
  <section class="pt-md-5 py-md-5 pb-md-0">
    <div class="container row mx-auto col-md-9">
      <h3>¿Cómo es el proceso de contratación?</h3>
      <div class="justify-content-center d-md-flex mt-5 px-md-3">
        <div class="card card-m-none col-md p-4 rounded shadow-none"><img class="mr-auto d-block" src="image/icono-manos.svg" alt="" srcset=""/>
          <h3 class="text-warning mt-4 mb-3"> Asesoramiento</h3>
          <p>Analizamos junto a nuestros clientes las necesidades y requerimientos técnicos y alcance de cada proyecto para que puedan elegir el equipamiento correcto y tomar las mejores decisiones en cada caso.</p>
        </div>
        <div class="card card-m-none col-md p-4 rounded shadow-none mx-md-4 my-5 my-md-0"><img class="mr-auto d-block" src="image/icono-caja.svg" alt="" srcset=""/>
          <h3 class="text-warning mt-4 mb-3"> Obtención</h3>
          <p>Analizamos junto a nuestros clientes las necesidades y requerimientos técnicos y alcance de cada proyecto para que puedan elegir el equipamiento correcto y tomar las mejores decisiones en cada caso.</p>
        </div>
        <div class="card card-m-none col-md p-4 rounded shadow-none"><img class="mr-auto d-block" src="image/icono-mano-caja.svg" alt="" srcset=""/>
          <h3 class="text-warning mt-4 mb-3"> Soporte</h3>
          <p>Analizamos junto a nuestros clientes las necesidades y requerimientos técnicos y alcance de cada proyecto para que puedan elegir el equipamiento correcto y tomar las mejores decisiones en cada caso.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-white mt-5">
    <div class="col-md-7 col-12 mt-container-home pt-md-4 pl-md-5">
      <h3 class="ml-md-5 pl-3 my-4 py-5">Contacto</h3>
      <form class="card card-m-on d-flex py-5 ml-md-5 mb-5" style="border-radius: 20px;">
        <div class="px-md-5 col-md-12 d-md-flex">
          <div class="md-form col-md-6">
            <input class="form-control" id="form1" type="text"/>
            <label for="form1" style="left:auto;">Nombre</label>
          </div>
          <div class="md-form col-md-6">
            <input class="form-control" id="form2" type="text"/>
            <label for="form2" style="left:auto;">Apellido</label>
          </div>
        </div>
        <div class="px-md-5 col-md-12 d-md-flex">
          <div class="md-form col-md-6">
            <input class="form-control" id="form3" type="text"/>
            <label for="form3" style="left:auto;">Email</label>
          </div>
          <select class="mdb-select md-form col-md-6">
            <option value="" disabled="" selected="">Motivo de consulta</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </div>
        <div class="px-md-5 col-md-12 d-md-flex">
          <div class="md-form col-md-12">
            <textarea class="md-textarea form-control" id="form7" rows="3"></textarea>
            <label for="form7" style="left:auto;">Consulta</label>
          </div>
        </div>
        <div class="px-md-5 col-md-12">
          <bottom class="btn btn-md btn-primary col-md-3 mt-md-5 col-6">Enviar                     </bottom>
        </div>
      </form>
    </div>
  </section>
@endsection