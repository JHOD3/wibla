@extends('web.layouts.index')
@section('content')
    <section class="bg-section-home">
        <div class="container position-absolute-md absulute-center py-section-home d-md-flex d-block pt-5 px-md-5 position-absolute center-image-absolute"
             style="z-index: 99;">
            <div class="col-md-5 col-12 mt-container-home mt-4">
                <div>
                    <h1 class="montserrat text-md-left text-white font43-px">{{$product->name}}</h1>
                    <p class="mt-md-4 text-md-left font16-px text-white d-md-block d-none">
                        {{$product->text_additional}}
                    </p>
                </div>
                <div class="pt-3" data-aos="flip-up" data-aos-duration="2000"><a
                            class="btn btn-outline-white btn-rounded d-block ml-md-0 col-md-4 col-6 font-weight-bold"
                            href="{{route('contact',['product'=>'Quiero comprar '.$product->name.' Por favor contactarme a los datos proporcionados. Gracias.'])}}">Quiero comprar</a></div>
            </div>
            <div class="col-md-7 col-12 mt-container-home d-none d-md-block"></div>
        </div>
        <div class="owl-carousel owl-home d-none d-md-block">
            <embed class="mx-auto d-block" src="{{asset('image/header_product_detail.png')}}" style="width:100%"/>
            <embed class="mx-auto d-block" src="{{asset('image/header_product_detail.png')}}" style="width:100%"/>
            <embed class="mx-auto d-block" src="{{asset('image/header_product_detail.png')}}" style="width:100%"/>
        </div>
        <div class="owl-carousel owl-home d-block d-md-none">
            <embed class="mx-auto d-block" src="{{asset('image/header_product-m.png')}}" style="width:100%"/>
            <embed class="mx-auto d-block" src="{{asset('image/header_product-m.png')}}" style="width:100%"/>
            <embed class="mx-auto d-block" src="{{asset('image/header_product-m.png')}}" style="width:100%"/>
        </div>
    </section>
    <section class="pt-md-5 py-5 pb-md-0">
        <div class="container pt-md-5">
            <h2 class="text-center font39-px" data-aos="fade-down"
                data-aos-duration="500">{{$product->title_description}}</h2>
            <p class="font16-px text-center col-md-8 mx-auto">
                {{$product->Description}}
            </p>
        </div>
    </section>
    <section class="pt-md-5 py-5 pb-md-0">
        <div class="container row mx-auto col-md-8">
            <div class="col-md-6"><img src="{{url('/').'/uploads/'.$product->primary_image}}" alt="" srcset=""/></div>
            <div class="col-md-6 d-md-flex align-items-center">
                <div class="px-5 px-md-0">
                    <div><small class="font16-px">Modelo</small>
                        <h2 class="font43-px-d">{{$product->modelo}}</h2>
                        {{-- <div class="d-flex align-items-center"><span class="rateMe2" id="rateMe3"> </span>
                            <p class="ml-md-3 mb-0">6 comentarios </p>
                        </div> --}}
                    </div>
                    <div class="mt-md-4"><small class="font16-px">Precio</small>
                        <h2 class="font43-px-d">{{$product->precio}}</h2>
                    </div>
                    <a href="{{route('contact',['product'=>'Quiero comprar '.$product->name.' Por favor contactarme a los datos proporcionados. Gracias.'])}}"
                    class="btn btn-md btn-secondary col-8">Quiero comprar</a>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-md-5 py-5 pb-md-0">
        <h2 class="text-center font39-px mt-md-5" data-aos="fade-down" data-aos-duration="500">Especificaciones</h2>
        <table class="table table-striped col-md-7 mx-auto mt-5 col-10">
            <tbody>
            @php
                $product=;$count =  count($product->property)/2;
            @endphp
            @foreach(array_chunk($product->property,$count)[0] as $key => $text_name)
                <tr>
                    <td>{{$text_name}}</td>
                    <td>{{array_chunk($product->property,$count)[1][$key]}}</td>
                </tr>
            @endforeach
            <tbody>
        </table>
        <div class="owl-carousel owl-product owl-theme col-md-7 mx-auto mt-5 col-12 px-0">
            @foreach($product->slider_image as $imagen)
                <img src="{{url('/')}}/uploads/{{$imagen}}" alt="">
            @endforeach
        </div>
    </section>
    <section class="pt-md-5 py-5 pb-md-0 mb-md-5">
        <h2 class="text-center font39-px mt-md-5" data-aos="fade-down" data-aos-duration="500">¿Qué hay en la caja?</h2>
        <div class="container row mx-auto mt-md-5">
            <div><img class="ml-md-auto mx-auto d-block mt-md-0 mt-4 img-caja-content"
                      src="{{url('/')}}/uploads/{{$product->content_box_image}}" alt="" srcset=""/></div>
            <div class="d-flex align-items-center mt-md-0 mt-5">
                <ul class="content-caja-li">
                    @foreach($product->box_content as $conten_box)
                        <li><i class="far fa-check mr-3"></i>{{$conten_box}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <section class="pt-md-5 py-5 pb-md-0 bg-white">
        <h2 class="text-center font49-px mt-md-4" data-aos="fade-down" data-aos-duration="500">Conoce todos nuestros
            productos</h2>
        <div class="container mt-md-5 my-5 my-md-0 pt-4 d-flex justify-content-md-center pb-md-5 mx-auto pt-md-4 overflow-x-auto scroll-count"
             data-aos="fade-up" data-aos-duration="1500">
            <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos"
                                             src="{{asset('image/icono-camara-circulo.svg')}}" alt="" srcset=""/>
                <div class="mt-4">
                    <h3 class="font24-px text-center">Rápido!</h3>
                </div>
            </div>
            <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos"
                                             src="{{asset('image/icono-lentes-circulo.svg')}}" alt="" srcset=""/>
                <div class="mt-4">
                    <h3 class="font24-px text-center">Ahorrás!</h3>
                </div>
            </div>
            <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos"
                                             src="{{asset('image/icono-proyector-circulo.svg')}}" alt="" srcset=""/>
                <div class="mt-4">
                    <h3 class="font24-px text-center">Seguro!</h3>
                </div>
            </div>
            <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos"
                                             src="{{asset('image/icono-memoria-circulo.svg')}}" alt="" srcset=""/>
                <div class="mt-4">
                    <h3 class="font24-px text-center">Seguro!</h3>
                </div>
            </div>
            <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos"
                                             src="{{asset('image/icono-accesorio-circulo.svg')}}" alt="" srcset=""/>
                <div class="mt-4">
                    <h3 class="font24-px text-center">Seguro!</h3>
                </div>
            </div>
            <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos"
                                             src="{{asset('image/icono-gaming-circulo.svg')}}" alt="" srcset=""/>
                <div class="mt-4">
                    <h3 class="font24-px text-center">Seguro!</h3>
                </div>
            </div>
        </div>
        <div class="progress md-progress col-5 px-0 mx-auto d-md-none d-flex" style="height: .5rem !important;">
            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                 aria-valuemax="100"></div>
        </div>
    </section>
@endsection
@section('script')
    <script src="{{asset('js/multi-range.js')}}"></script>
    <script src="{{asset('js/rating.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.scroll-count').scroll(function () {
                let scroll = $(this).scrollLeft();
                let suma = scroll / 12 * 6;
                $('.progress-bar').css('width', suma + 'px');
            });

            $('.owl-home').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                items: 1,
                nav: false,
                dots: false
            })
            $('.owl-product').owlCarousel({
                loop: true,
                margin: 10,
                //- responsiveClass:true,
                //- autoplay:true,
                //- autoplayTimeout:5000,
                //- autoplayHoverPause:true,
                items: 1,
                nav: false,
                dots: true
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
                        bgThumbColor: '#4285F4',
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
