@extends('web.layouts.index')
@section('content')
  <section class="bg-section-contact">
    <div class="container position-absolute-md absulute-center py-section-home d-md-flex d-block pt-5 px-md-5 position-absolute center-image-absolute" style="z-index: 99;">
      <div class="col-md-5 col-12 mt-container-home mt-md-5">
        <div class="pl-md-5">
          <h1 class="montserrat text-md-left text-white font42-px text-center"> Contacto</h1>
          <p class="mt-md-4 text-md-left font16-px text-white text-center">Si no encontrás tu consulta acá, podés <br> escribirnos a  <a class="text-white" href="mailto:ayuda@wibla.com">ayuda@wibla.com</a>con tu <br> pregunta, estamos para ayudarte.</p>
        </div>
      </div>
      <div class="col-md-7 col-12 mt-container-home pt-md-5">
        <form class="card d-flex py-5" style="border-radius: 20px;">
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
            <bottom class="btn btn-md btn-primary col-md-3 mt-md-5 col-6">Enviar</bottom>
          </div>
        </form>
      </div>
    </div>
    <embed class="mx-auto d-none d-md-block" src="image/header_contacto.svg" style="width:100%"/>
    <embed class="mx-auto d-block d-md-none" src="image/header_contacto-m.svg" style="width:100%"/>
  </section>
  @include('web.layouts.footer_include_section')
@endsection