@extends('web.layouts.index')
@section('content')
  <section class="bg-section-contact">
    <div class="container position-absolute-md absulute-center py-section-home d-md-flex d-block pt-5 px-md-5 position-absolute center-image-absolute" style="z-index: 99;">
      <div class="col-md-5 col-12 mt-container-home mt-md-5">
        <div class="pl-md-5">
          <h1 class="montserrat text-md-left text-white font42-px text-center"> Contacto</h1>
          <p class="mt-md-4 text-md-left font16-px text-white text-center">Si no encontrás tu consulta acá, podés <br> escribirnos a  <a class="text-white" href="mailto:ayuda@wibla.com">ayuda@wibla.com.ar</a> con tu <br> pregunta, estamos para ayudarte.</p>
        </div>
      </div>
      <div class="col-md-7 col-12 mt-container-home pt-md-5">
        <!-- <form class="card d-flex py-5" method="post" action="{{route('sendContact')}}" style="border-radius: 20px;"> -->
        {!! Form::open(['action' => 'PageController@sendContact', 'id'=>'form-contact', 'class'=>"card d-flex py-5 form-contact", 'style'=>'border-radius: 20px;']) !!}
          <div class="px-md-5 col-md-12 d-md-flex">
            <div class="md-form col-md-6">
              <input class="form-control" id="form1" name="nombre" type="text" require/>
              <label for="form1" style="left:auto;">Nombre</label>
            </div>
            <div class="md-form col-md-6">
              <input class="form-control" id="form2" name="apellido" type="text" require/>
              <label for="form2" style="left:auto;">Apellido</label>
            </div>
          </div>
          <div class="px-md-5 col-md-12 d-md-flex">
            <div class="md-form col-md-6">
              <input class="form-control" id="form3" name="email" type="text" require/>
              <label for="form3" style="left:auto;">Email</label>
            </div>
            <div class="md-form col-md-6">
              <input class="form-control" id="form5" name="telefono" type="text" require/>
              <label for="form3" style="left:auto;">Teléfono</label>
            </div>
            <!-- <select class="mdb-select md-form col-md-6">
              <option value="" disabled="" selected="">Motivo de consulta</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select> -->
          </div>
          <div class="px-md-5 col-md-12 d-md-flex">
            <div class="md-form col-md-12">
              <textarea class="md-textarea form-control" id="form7" name="mensaje" rows="3" require>{{$product ?? ''}}</textarea>
              <label for="form7" style="left:auto;">Consulta</label>
            </div>
          </div>
          <div class="px-md-5 col-md-12 d-md-flex">
            {!! NoCaptcha::display(['data-theme' => 'dark','data-callback'=>'captchaCheckContact']) !!}
            @error('g-recaptcha-response')
                <span class="invalid-feedback d-block justify-content-center">
                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                </span>
            @enderror
          </div>
          <div class="px-md-5 col-md-12">
            <button type="submit" id="Contact_Send" class="btn btn-md btn-primary col-md-3 mt-md-5 col-6" disabled>Enviar</button>
          </div>
          {!! Form::close() !!}
      </div>
    </div>
    <embed class="mx-auto d-none d-md-block" src="{{asset('image/header_contacto.svg')}}" style="width:100%"/>
    <embed class="mx-auto d-block d-md-none" src="{{asset('image/header_contacto-m.svg')}}" style="width:100%"/>
  </section>
  @include('web.layouts.footer_include_section')
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script>
    $('#form-contact').validate({
      rules:{
          nombre:'required',
          apellido:'required',
          telefono:{
              required:true,
              minlength:8
          },
          email:{
              required:true,
              email:true
          },
          mensaje:'required',
      },
      messages:{
          nombre: 'El apellido es requerido',
          apellido:'El nombre es requerido',
          telefono:{
              required:'El teléfono es requerido',
              minlength:'El numero de telefono debe tener mas de 8 digitos.'
          },
          email:{
              required:'Por favor ingrese un email',
              email:'Ingrese un email correcto'
          },
          mensaje:'El cuerpo del mensaje es requerido',
      },
      errorElement: "small",
      errorPlacement: function ( error, element ) {
          error.addClass( "invalid-feedback" );
          if ( element.prop( "type" ) === "checkbox" ) {
              error.insertAfter( element.next("label") );
          } else {
              error.insertAfter( element.next("label") );
          }
      },
      highlight: function ( element, errorClass, validClass ) {
          $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
      },
      unhighlight: function (element, errorClass, validClass) {
          $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
      },
      submitHandler: function () {
          submit();
      }
  });
  $('#form-contact').on('keyup blur', function () {
        captchaCheckContact();
  });
  function captchaCheckContact() {
      let response = grecaptcha.getResponse();
      if ($('#form-contact').validate().checkForm() && response.length ) {
          $('#Contact_Send').prop('disabled', false);
      } else {
          $('#Contact_Send').prop('disabled', 'disabled');
      }
  }
</script>
@endsection