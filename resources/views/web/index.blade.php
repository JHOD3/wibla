@extends('web.layouts.index')

@section('content')
    <section class="bg-section-home">
        <div class="container position-absolute-md absulute-center py-section-home d-md-flex d-block pt-5 px-md-5 position-absolute center-image-absolute" style="z-index: 99;">
            <div class="col-md-5 col-12 mt-container-home mt-4">
                <div>
                    <h1 class="font-weight-bold montserrat text-md-left text-primary font43-px" data-aos="fade-right" data-aos-duration="500">El marketplace <br> para profesionales <br> audiovisuales</h1>
                    <p class="font-weight-500 inline15-rem mt-md-4 text-md-left font18-px" data-aos="fade-up" data-aos-duration="1500">Encontrá los mejores productos para <br> los usuarios más exigentes, todo en <br> un solo lugar.</p>
                </div>
                <div class="d-md-none d-block"></div>
                <div class="pt-3" data-aos="flip-up" data-aos-duration="2000">
                    <a class="btn btn-outline-primary btn-rounded d-block ml-md-0 col-md-4 col-6 font-weight-bold" href="{{url('/product_list')}}">Comprar ahora!</a></div>
            </div>
            <div class="col-md-7 col-12 mt-container-home d-none d-md-block"></div>
        </div>
        <div class="owl-carousel owl-home d-none d-md-block">
            <embed class="mx-auto d-block" src="image/fondo_header.png"/>
        </div>
        <div class="owl-carousel owl-home d-block d-md-none">
            <embed class="mx-auto d-block" src="image/fondo_header-m.png" style="width:100%"/>
        </div>
    </section>
    <section class="pt-md-5 containt-layout mb-md-5 pb-md-5">
        <h2 class="text-center font53-px mt-md-3 my-5" data-aos="fade-up" data-aos-duration="1500">Conocé todos nuestros productos</h2>
        <div class="container px-md-auto mx-md-auto mx-0 px-0 mt-md-5 d-md-flex" id="camaras">
            <div class="card bg-secondary col-md-3 pl-md-5 pt-md-5 pb-md-4 py-4 pl-4 card-rounde-left" data-aos="zoom-in" data-aos-duraction="1500">
                <embed class="mr-auto" src="image/icono-camara.svg" type=""/>
                <h4 class="text-white mt-md-3 mt-4 font38-px">Cámaras</h4>
                <div class="raya py-1-raya bg-white rounded col-md-3 my-md-3 d-md-block d-none"></div>
                <p class="text-white">DSLR, Mirrorless, compactas, instantáneas</p>
                <a href="{{route('product_list', ['category'=>'camaras'])}}" class="btn btn-outline-white btn-rounded col-md-5 col-4 btn-sm px-md-0 py-md-2 mt-md-3">Ver todo</a>
            </div>
            <div class="col-md-12 d-md-flex owl-carousel owl-product-1 px-0 mx-0 bg-slider">
                @foreach($camaras as $camara)
                    <a href="{{route('product_detail',['slug'=>$camara->slug])}}" data-aos="zoom-in" data-aos-duraction="1500">
                        <div class="content-product mx-md-auto">
                            <img class="img-product" src="{{url('/')}}/uploads/thumbnail/250px/{{$camara->primary_image}}" alt="" srcset=""/>
                            <div class="px-5 px-md-4 text-dark">
                                <p class="mb-0 mt-2">{{$camara->categoria}}</p>
                                <h5 class="truncate" data-text-count="20">{{$camara->name}}</h5>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="container px-md-auto mx-md-auto mx-0 px-0 mt-md-5 d-md-flex" id="lentes">
            <div class="card bg-primary col-md-3 pl-md-5 pt-md-5 pb-md-4 py-4 pl-4 card-rounde-left" data-aos="zoom-in" data-aos-duraction="1500">
                <embed class="mr-auto" src="image/icono-lentes.svg" type=""/>
                <h4 class="text-white mt-md-3 font38-px">Lentes</h4>
                <div class="raya py-1-raya bg-white rounded col-md-3 my-md-3 d-md-block d-none"></div>
                <p class="text-white">Fijos, Gran Angular, Macro, Zoom, Teleobjetivos, Tilt-Shift.</p>
                <a href="{{route('product_list' , ['category'=>'lentes'])}}" class="btn btn-outline-white btn-rounded col-md-5 col-4 btn-sm px-md-0 py-md-2 mt-md-3">Ver todo</a>
            </div>
            <div class="col-md-12 d-md-flex owl-carousel owl-product-1 px-0 mx-0 bg-slider">
                @foreach($lentes as $lente)
                    <a href="{{route('product_detail',['slug'=>$lente->slug])}}" data-aos="zoom-in" data-aos-duraction="1500">
                        <div class="content-product mx-md-auto">
                            <img class="img-product" src="{{url('/')}}/uploads/thumbnail/250px/{{$lente->primary_image}}" alt="" srcset=""/>
                            <div class="px-5 px-md-4 text-dark">
                                <p class="mb-0 mt-2">{{$lente->categoria}}</p>
                                <h5 class="truncate" data-text-count="20">{{$lente->name}}</h5>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="container px-md-auto mx-md-auto mx-0 px-0 mt-md-5 d-md-flex" id="proyectores">
            <div class="card bg-warning col-md-3 pl-md-5 pt-md-5 pb-md-4 py-4 pl-4 card-rounde-left" data-aos="zoom-in" data-aos-duraction="1500">
                <embed class="mr-auto" src="image/icono-proyector.svg" type=""/>
                <h4 class="text-white mt-md-3 font38-px">Proyectores</h4>
                <div class="raya py-1-raya bg-white rounded col-md-3 my-md-3 d-md-block d-none"></div>
                <p class="text-white">LED, LCD, DLP, LCOS, LASER.</p>
                <a href="{{route('product_list', ['category'=>'proyectores'])}}" class="btn btn-outline-white btn-rounded col-md-5 col-4 btn-sm px-md-0 py-md-2 mt-md-3">Ver todo</a>
            </div>
            <div class="col-md-12 d-md-flex owl-carousel owl-product-1 px-0 mx-0 bg-slider">
                @foreach($proyectores as $proyector)
                    <a href="{{route('product_detail',['slug'=>$proyector->slug])}}" data-aos="zoom-in" data-aos-duraction="1500">
                        <div class="content-product mx-md-auto">
                            <img class="img-product" src="{{url('/')}}/uploads/thumbnail/250px/{{$proyector->primary_image}}" alt="" srcset=""/>
                            <div class="px-5 px-md-4 text-dark">
                                <p class="mb-0 mt-2">{{$proyector->categoria}}</p>
                                <h5 class="truncate" data-text-count="20">{{$proyector->name}}</h5>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <section class="pt-md-5 bg-section-home-2">
        <h2 class="text-center font49-px text-secondary position-absolute center-image-absolute mt-text-garantia font-weight-bold">Garantías 100% oficiales!</h2>
        <embed class="mx-auto container" src="{{ asset('image/sin_promesas.png')}}" type="" style="width: 100%;"/>
    </section>
    <section class="pt-md-5 py-5">
        <h2 class="text-center font72-px text-primary" data-aos="flip-down" data-aos-duraction="1500">Ventajas <span class="font-weight-bold">wibla!<span></h2>
        <div class="container mt-md-5 my-5 my-md-0 pt-4 d-flex justify-content-md-center pb-md-5 mx-auto pt-md-5 overflow-x-auto scroll-count" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-md-3 col-9"><img class="mr-md-auto iconos-ventajas" src="image/icono-reloj.svg" alt="" srcset=""/>
                <div class="mt-4">
                    <h3 class="font35-px text-primary">Rápido!</h3>
                    <p class="font16-px">No pierdas tiempo buscando, encontrá lo mejor a un clic.</p>
                </div>
            </div>
            <div class="col-md-3 col-9"><img class="mr-md-auto iconos-ventajas" src="image/icono-cartera.svg" alt="" srcset=""/>
                <div class="mt-4">
                    <h3 class="font35-px text-primary">Ahorrás!</h3>
                    <p class="font16-px"> Precios directos, los más competitivos del mercado.</p>
                </div>
            </div>
            <div class="col-md-3 col-9"><img class="mr-md-auto iconos-ventajas" src="image/icono-telefono.svg" alt="" srcset=""/>
                <div class="mt-4">
                    <h3 class="font35-px text-primary">Seguro!</h3>
                    <p class="font16-px">Somos representantes directos, todo tiene garantía oficial.</p>
                </div>
            </div>
        </div>
        <div class="progress md-progress col-5 px-0 mx-auto d-md-none d-flex" style="height: .5rem !important;">
            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            $('.scroll-count').scroll(function(){
                let scroll = $(this).scrollLeft();
                let suma = scroll/12*5;
                $('.progress-bar').css('width',suma+'px');
            });

            $('.owl-home').owlCarousel({
                // loop:true,
                margin:10,
                responsiveClass:true,
                // autoplay:true,
                // autoplayTimeout:5000,
                // autoplayHoverPause:true,
                items:1,
                nav:false,
                dots:false
            })
            $('.owl-product-1').owlCarousel({
                loop:true,
                margin:0,
                responsiveClass:true,
                //- autoplay:true,
                //- autoplayTimeout:5000,
                //- autoplayHoverPause:true,
                nav:false,
                dots:false,
                responsive:{
                    0:{
                        margin:-40,
                        items:1
                    },
                    320:{
                        margin:-60,
                        items:1
                    },
                    400:{
                        margin:-80,
                        items:1
                    },
                    768:{
                        margin:0,
                        items:3
                    },
                    1400:{
                        margin:100,
                        items:3
                    }
                }
            })

        });
    </script>
@endsection
