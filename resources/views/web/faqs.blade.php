@extends('web.layouts.index')
@section('content')
  <section class="bg-section-home">
    <div class="container position-absolute-md absulute-center py-section-home d-md-flex d-block pt-5 px-md-5 position-absolute center-image-absolute" style="z-index: 99;">
      <div class="col-md-5 col-12 mt-container-home mt-4">
        <div>
          <h1 class="montserrat text-md-left text-dark font43-px text-center"> Preguntas frecuentes</h1>
          <p class="mt-md-4 text-md-left font16-px text-dark text-center">Si no encontrás tu consulta acá, podés <br> escribirnos a  <a class="text-primary" href="mailto:ayuda@wibla.com">ayuda@wibla.com</a> con tu <br> pregunta, estamos para ayudarte.</p>
        </div>
      </div>
      <div class="col-md-7 col-12 mt-container-home d-none d-md-block"></div>
    </div>
    <div class="owl-carousel owl-home d-none d-md-block">
      <embed class="mx-auto d-block" src="image/fondo_header_faqs.png" style="width:100%"/>
      {{-- <embed class="mx-auto d-block" src="image/fondo_header_faqs.png" style="width:100%"/>
      <embed class="mx-auto d-block" src="image/fondo_header_faqs.png" style="width:100%"/> --}}
    </div>
    <div class="owl-carousel owl-home d-block d-md-none">
      <embed class="mx-auto d-block" src="image/fondo_header_faqs-m.png" style="width:100%"/>
      {{-- <embed class="mx-auto d-block" src="image/fondo_header_faqs-m.png" style="width:100%"/>
      <embed class="mx-auto d-block" src="image/fondo_header_faqs-m.png" style="width:100%"/> --}}
    </div>
  </section>
  <section class="pt-md-5 py-5 pb-md-0">
    <h2 class="text-center font39-px mt-md-5" data-aos="fade-down" data-aos-duration="500">Preguntas frecuentes   </h2>
    <div class="accordion md-accordion accordion-3 col-md-7 mx-auto py-md-5" id="accordionEx194" role="tablist" aria-multiselectable="true">
      <div class="card border-0">
        <div class="card-header" id="heading4" role="tab"><a data-toggle="collapse" data-parent="#accordionEx194" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
            <p class="mb-0 mt-3 text-muted font18-px"><i class="fal fa-plus-circle rotate-icon-plus font30-px float-left mr-3"></i>¿Cómo realizo una compra en Wibla.com.ar ?</p></a></div>
        <div class="collapse show" id="collapse4" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
          <div class="card-body pt-0 pl-md-5">
            <p>Es fácil y rápido. Seleccionás el producto que te interesa y completando un simple formulario nos ponemos en contacto finalizar la compra de forma telefónica.</p>
          </div>
        </div>
      </div>
      <div class="card border-0">
        <div class="card-header" id="heading5" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
            <p class="mb-0 mt-3 text-muted font18-px"><i class="fal fa-plus-circle rotate-icon-plus font30-px float-left mr-3"></i>¿Puedo realizar una compra por teléfono?</p></a></div>
        <div class="collapse" id="collapse5" role="tabpanel" aria-labelledby="heading5" data-parent="#accordionEx194">
          <div class="card-body pt-0 pl-md-5">
            <p>Podés hacer tus compras a través del servicio de Venta Telefónica de Wibla comunicándote al (11) 2899 8111 de lunes a viernes de 09:00 a 18:00 hs.</p>
            <p>Medios de pago telefónicos:</p>
            <ul>
                <li>Tarjetas de Crédito Visa, Cabal y MasterCard.</li>
                <li>Tarjetas de Débito Visa, Cabal y MasterCard</li>
                <li>Tarjeta Naranja</li>
                <li>Mercado Pago</li>
                <li>Ualá</li>
            </ul>
        </div>
        </div>
      </div>
      <div class="card border-0">
        <div class="card-header" id="heading6" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
            <p class="mb-0 mt-3 text-muted font18-px"><i class="fal fa-plus-circle rotate-icon-plus font30-px float-left mr-3"></i>¿Cómo son los envíos? </p></a></div>
        <div class="collapse" id="collapse6" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx194">
            <div class="card-body pt-0 pl-md-5">
                <p>En aquellos productos que superen el costo de $15000 la entrega es sin cargo, los productos con montos inferiores a dicho valor tendrán un costo de envío según la ubicación del comprador.</p>
            </div>
        </div>
      </div>
      <div class="card border-0">
        <div class="card-header" id="heading6" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
            <p class="mb-0 mt-3 text-muted font18-px"><i class="fal fa-plus-circle rotate-icon-plus font30-px float-left mr-3"></i>¿Cómo realizar consultas y reclamos?</p></a></div>
        <div class="collapse" id="collapse7" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx194">
            <div class="card-body pt-0 pl-md-5">
                <p>
                    Tenemos a disposición los siguientes medios de contacto para consultas, reclamos y sugerencias: Centro de Atención al Cliente por teléfono de Lunes a Viernes de 09:00 a 18:00hs al siguiente número (11) 2899 8111 o escribimos a
                    <a href="mailto:ayuda@wibla.com.ar">ayuda@wibla.com.ar</a>
                </p>
            </div>
        </div>
      </div>
      <div class="card border-0">
        <div class="card-header" id="heading6" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
            <p class="mb-0 mt-3 text-muted font18-px"><i class="fal fa-plus-circle rotate-icon-plus font30-px float-left mr-3"></i>¿Cómo cambio o devuelvo un producto?</p></a></div>
        <div class="collapse" id="collapse8" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx194">
            <div class="card-body pt-0 pl-md-5">
                <p>Las devoluciones se deben realizar dentro de los 5 días corridos de entregado el producto, pasado ese lapso corre la garantía del producto.</p>
            </div>
        </div>
      </div>
      <div class="card border-0">
        <div class="card-header" id="heading6" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
            <p class="mb-0 mt-3 text-muted font18-px"><i class="fal fa-plus-circle rotate-icon-plus font30-px float-left mr-3"></i>¿Cuales son los canales de venta de Wibla?</p></a></div>
        <div class="collapse" id="collapse9" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx194">
            <div class="card-body pt-0 pl-md-5">
                <p>
                    Las devoluciones se deben realizar dentro de los 5 días corridos de entregado el producto, pasado ese lapso corre la garantía del producto.
                    <a href="{{url('/')}}"></a>
                </p>
                <p>
                    Venta Telefónica comunicándote al (11) 2899 8111 de Lunes a Viernes de 09:00 a 18:00 hs.
                </p>
                <p>
                    A través de nuestro Whatsapp mediante el siguiente link: <a href="https://wa.link/oj0vo0">wa.link/oj0vo0</a>
                </p>
                <p>
                    Aclaracion importante: No comercializamos nuestros productos mediante ningún otro canal.
                </p>
            </div>
        </div>
      </div>

    </div>
  </section>
  @include('web.layouts.footer_include_section')
@endsection
@section('script')
<script>
    $('.owl-home').owlCarousel({
        // loop:true,
        margin:10,
        // responsiveClass:true,
        // autoplay:true,
        // autoplayTimeout:5000,
        // autoplayHoverPause:true,
        items:1,
        nav:false,
        dots:false
    });
</script>
@endsection
