@extends('web.layouts.index')
@section('content')
  <section class="pt-md-5 py-5 pb-md-0">
    <div class="container pt-md-5 px-5 col-md-9">
      <h2 class="font40-px" data-aos="fade-down" data-aos-duration="500">Cannon EOS r6</h2>
      <p class="font16-px">
        Olvida todo lo que sabías de las cámaras mirrorless.<br class="d-md-block d-none">
        El impecable rendimiento de la EOS R5 revolucionará tu fotografía y vídeo.
      </p>
    </div>
  </section>
  <section class="pt-md-5 py-5 pb-md-0">
    <div class="container row mx-auto col-md-9">
      <div class="col-md-6"><img src="{{url('/').'/uploads/thumbnail/300px/'.$product->primary_image}}"  class="mx-auto d-block" alt="" srcset=""/></div>
      <div class="col-md-6 d-md-flex align-items-center">
        <div class="px-4 px-md-5">
          <div><small class="font16-px">Modelo</small>
            <h2 class="font43-px-d">{{$product->modelo}}</h2>
            <div class="d-flex align-items-center"><span class="rateMe2" id="rateMe3"> </span>
              <p class="ml-md-3 mb-0">6 comentarios  </p>
            </div>
          </div>
          <div class="mt-md-4"><small class="font16-px">Precio</small>
            <h2 class="font43-px-d">{{$product->precio}}</h2>
          </div>
          <botton class="btn btn-md btn-secondary col-8">Quiero comprar</botton>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-md-5 py-5 pb-md-0">
    <div class="container mx-auto col-md-9 px-0">
      <h2 class="font39-px mt-md-5 px-4" id="especificaciones" data-aos="fade-down" data-aos-duration="500"> <a class="text-dark" href="javascript:void(0)"><i class="fal fa-plus-circle mr-3" id="icono-especificaciones"> </i>Especificaciones</a></h2>
      <table class="table table-striped col-md-11 mx-auto mt-5 col-10 d-none" id="target-especificaciones">
         <tbody>
            @php
             $count =  count($product->property)/2;
            @endphp
            @foreach(array_chunk($product->property,$count)[0] as $key => $text_name)
              <tr>
                <td>{{$text_name}}</td>
                <td>{{array_chunk($product->property,$count)[1][$key]}}</td>
              </tr>
            @endforeach
        <tbody>
      </table>
      <div class="owl-carousel owl-product owl-theme col-md-11 mx-auto mt-5 col-12 px-0">
        @foreach($product->slider_image as $imagen)
          <div>
            <img src="{{url('/')}}/uploads/{{$imagen}}">
          </div>
        @endforeach
      </div></div>
  </section>
  <section class="pt-md-5 pb-5 pt-3 pb-md-0 mb-md-5 pb-md-5">
    <div class="container mx-auto col-md-9">
      <h2 class="font39-px mt-md-5 px-4" id="que-hay" data-aos="fade-down" data-aos-duration="500"> <a class="text-dark" href="javascript:void(0)"><i class="fal fa-plus-circle mr-3" id="icono-que-hay"> </i>¿Qué hay en la caja?</a></h2>
      <div class="container row mx-auto mt-md-5 d-none" id="target-que-hay">
        <div class="col-md-6"><img class="ml-md-auto mx-auto d-block mt-md-0 mt-4 img-caja-content" src="{{url('/')}}/uploads/{{$product->content_box_image}}" alt="" width="300" height="300" srcset=""/></div>
        <div class="col-md-6 d-flex align-items-center mt-md-0 mt-5">
          <ul class="content-caja-li">
            @foreach($product->box_content as $conten_box)
              <li> <i class="far fa-check mr-3"></i>{{$conten_box}}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('script')
  <script src="{{asset('js/multi-range.js')}}"></script>
  <script src="{{asset('js/rating.js')}}"></script>
  <script>
    $(document).ready(function() {

      $("#especificaciones").on("click",function() {
        $('#icono-especificaciones').toggleClass('rotar-plug', 1500);
        $('#target-especificaciones').toggleClass('d-none',1500);
      });
      $("#que-hay").on("click",function() {
        $('#icono-que-hay').toggleClass('rotar-plug', 1500);
        $('#target-que-hay').toggleClass('d-none',1500);
      });
      $('.scroll-count').scroll(function(){
        let scroll = $(this).scrollLeft();
        let suma = scroll/12*6;
        $('.progress-bar').css('width',suma+'px');
      });

      $('.owl-home').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        items:1,
        nav:false,
        dots:false
      })
      $('.owl-product').owlCarousel({
        loop:true,
        //- responsiveClass:true,
        //- autoplay:true,
        //- autoplayTimeout:5000,
        //- autoplayHoverPause:true,
        items:1,
        nav:false,
        dots:true,
      })
      $('#multi6').mdbRange({
        width: '100%',
        single: {
          active: true,
          bgThumbColor: '#e8427d',
          textThumbColor: '#fff',
          multi: {
            active: true,
            rangeLength: 1,
            bgThumbColor: '#4285f4',
            textThumbColor: '#000'
          },
        }
      });

      $('#rateMe3').mdbRate();
      //- $('#rateMe2').mdbRate();
      //- $('.mdb-select').materialSelect();
    });


  </script>
@endsection

