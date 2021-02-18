@extends('web.layouts.index')
@section('style')
  <link rel="stylesheet" href="css/multi-range.min.css">
  <link rel="stylesheet" href="css/rating.min.css">
@endsection
@section('content')

  <section class="bg-section-home">
    <div class="container position-absolute-md absulute-center py-section-home d-md-flex d-block pt-5 px-md-5 position-absolute center-image-absolute" style="z-index: 99;">
      <div class="col-md-5 col-12 mt-container-home mt-4">
        <div>
          <p class="font12-px mb-1 mb-md-2"> <a class="text-white" href="#">Categorías  /   </a><a class="text-white" href="#">Cámaras digitales   /   </a><a class="text-white" href="#">Cámaras mirrorless</a></p>
          <h1 class="montserrat text-md-left text-white font43-px">Cámaras mirrorless</h1>
        </div>
      </div>
      <div class="col-md-7 col-12 mt-container-home d-none d-md-block"></div>
    </div>
    <div class="owl-carousel owl-home d-none d-md-block">
      <embed class="mx-auto d-block" src="image/header_product.png" style="width:100%"/>
      <embed class="mx-auto d-block" src="image/header_product.png" style="width:100%"/>
      <embed class="mx-auto d-block" src="image/header_product.png" style="width:100%"/>
    </div>
    <div class="owl-carousel owl-home d-block d-md-none">
      <embed class="mx-auto d-block" src="image/header_product-m.png" style="width:100%"/>
      <embed class="mx-auto d-block" src="image/header_product-m.png" style="width:100%"/>
      <embed class="mx-auto d-block" src="image/header_product-m.png" style="width:100%"/>
    </div>
  </section>
  <section class="pt-md-5 py-5 pb-md-0" style="background: #F6F6F6;">
    <div class="container-fluid row mx-0">
      <div class="col-9 d-md-none d-block d-flex mx-auto mb-4"><a class="button-collapse col-6 d-flex align-items-center" data-activates="slide-out-filter">
          <p class="mb-0 mr-3">Filtro </p><img class="icono-filter-order" src="image/icono-filter.svg" alt="" srcset=""/></a><a class="button-collapse col-6 d-flex align-items-center" data-activates="slide-out-order">
          <p class="mb-0 mr-3">Ordenar </p><img class="icono-filter-order" src="image/icono-ordenar.svg" alt="" srcset=""/></a></div>
      <div class="col-md-12 d-md-block d-none">
        <select class="mdb-select md-form col-2 ml-md-auto px-0" id="dynamic_select">
          <option value="" disabled="" selected="">Ordenar por</option>
          <option value="{{route('product_list', array_merge_recursive($filtros,['order'=>'Descatados']))}}">Descatados</option>
          <option value="{{route('product_list', array_merge_recursive($filtros,['order'=>'Oferta']))}}">En Oferta</option>
          <option value="{{route('product_list', array_merge_recursive($filtros,['order'=>'Nuevos']))}}">Nuevos</option>
        </select>
      </div>
      <div class="col-md-3 filtros d-md-block d-none">
        <div class="accordion md-accordion accordion-3" id="accordionEx194" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header border-bottom" id="heading4" role="tab">
                    <p class="mb-0 mt-3 text-muted">Filtros</p>
                    <div id="apply-filter">
                        @foreach($filtros as $key1 => $filter)
                            @if(is_array($filter))
                                @foreach($filter as $key => $filterItem)
                                    <span class="apply-filter">
                                        {{$filterItem}}
                                        @php
                                            $valor = $filtros[$key1][$key];
                                             unset($filtros[$key1][$key]);

                                        @endphp
                                        <a href="{{route('product_list', $filtros )}}" class="delete-filter">
                                            <i class="fa fa-times font10-px text-dark" aria-hidden="true"></i>
                                        </a>
                                        @php
                                            $filtros[$key1][$key] =$valor;
                                        @endphp
                                    </span>
                                @endforeach
                            @else
                                <span class="apply-filter">
                                    {{$filter}}
                                    @php
                                         $valor = $filtros[$key1];
                                         unset($filtros[$key1]);
                                    @endphp
                                    <a href="{{route('product_list', $filtros )}}" class="delete-filter">
                                        <i class="fa fa-times font10-px text-dark" aria-hidden="true"></i>
                                    </a>
                                    @php
                                        $filtros[$key1] = $valor;
                                    @endphp
                                </span>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
          <div class="card">
            <div class="card-header border-bottom" id="heading4" role="tab"><a data-toggle="collapse" data-parent="#accordionEx194" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                <p class="mb-0 mt-3 text-muted">Marca<i class="fas fa-angle-down rotate-icon"></i></p></a></div>
            <div class="collapse show" id="collapse4" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
              <div class="card-body pt-0">
                <ul class="mt-md-3">
                    @foreach($marks as $mark)
                        <li><a href="{{route('product_list', array_merge_recursive($filtros,['mark'=>$mark->name]))}}">{{$mark->name}} ({{$mark->catinda_by_marks}})</a></li>
                    @endforeach
                   {{-- @php
                        dd(URL::full())
                    @endphp--}}
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header border-bottom" id="heading5" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <p class="mb-0 mt-3 text-muted">Modelo<i class="fas fa-angle-down rotate-icon"></i></p></a></div>
            <div class="collapse" id="collapse5" role="tabpanel" aria-labelledby="heading5" data-parent="#accordionEx194">
              <div class="card-body pt-0">
                <p>
                <ul class="mt-md-3">

                  @foreach($models as $model)
                          <li><a href="{{route('product_list', array_merge_recursive($filtros,['modelo'=>$model['modelo']]))}}">{{$model['modelo']}} ({{$model['catinda_by_models']}})</a></li>
                  @endforeach
                </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header border-bottom" id="heading6" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <p class="mb-0 mt-3 text-muted">Rengo de precio <i class="fas fa-angle-down rotate-icon"></i></p></a></div>
            <div class="collapse" id="collapse6" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx194">
              <div class="card-body pt-0">
                <form class="multi-range-field my-5 pb-2">
                  <input class="multi-range col-12" id="multiRange" type="range"/>
                </form>
                  <div class="d-md-flex container">
                      <a href="{{route('product_list', array_merge_recursive($filtros,['precio'=>'']))}}" class="btn btn-primary col-md-6 rangoPrecio rangoPrecioMin" id="rangeMin">$0</a>
                      <a href="{{route('product_list', array_merge_recursive($filtros,['precio'=>'']))}}" class="btn btn-secondary col-md-6 rangoPrecio rangoPrecioMax" id="rangeMax">$0</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header border-bottom" id="heading6" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                <p class="mb-0 mt-3 text-muted">Resolución <i class="fas fa-angle-down rotate-icon"></i></p></a></div>
            <div class="collapse" id="collapse7" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx194">
              <div class="card-body pt-0">
                <p>
                <ul class="mt-md-3">
                  <li><a href="#">1600x1200 (16)</a></li>
                  <li><a href="#">1600x1200 (4)</a></li>
                  <li><a href="#">1600x1200 (8)</a></li>
                </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header border-bottom" id="heading6" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                <p class="mb-0 mt-3 text-muted">Calificación <i class="fas fa-angle-down rotate-icon"></i></p></a></div>
            <div class="collapse" id="collapse8" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx194">
              <div class="card-body pt-0">
                <div class="container mt-3"><span class="rateMe1" id="rateMe1"></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9 mx-auto d-block">
        @foreach($products as $product )
          <div class="card-product d-md-flex d-block py-4 mb-5 px-4 mx-md-0 mx-3 px-md-0" data-aos="fade-up" data-aos-duration="1500">
          @if($product->status_product == 'Destacado')
              <div class="card-destacados d-md-block d-none"><i class="fas fa-star mr-2"></i>{{$product->status_product}}</div>
          @endif
          @if($product->status_product == 'Oferta')
              <div class="card-oferta d-md-block d-none"><i class="fas fa-fire mr-2"></i>Oferta</div>
          @endif
          @if($product->status_product == 'Nuevo')
            <div class="card-nuevo d-md-block d-none"><i class="fas fa-heart mr-2"></i>¡Nuevo!</div>
          @endif
          <div class="col-md-4">
            <div class="d-block d-md-none">
              <p class="mb-0 mt-2">Cámara mirrorless</p>
              <h5>Cannon EOS R6</h5>
            </div><img src="{{url('/')}}/uploads/thumbnail/250px/{{$product->primary_image}}" alt="" srcset="" style="max-width: 80%;"/>
          </div>
          <div class="col-md-4 px-md-0 mt-md-0 mt-4">
            <h4 class="font22-px d-md-block d-none">{{$product->name}}</h4>
            <h6 class="font16-px">{{$product->sub_name}}</h6>
            <div class="raya py-1-raya rounded elegant-color col-md-2 my-3 d-md-block d-none"></div>
            <div class="d-md-none d-block my-3"></div>
            <p class="font11-px d-md-block d-none truncate" data-text-count="600" >
                @php
                   $count =  count($product->property)/2;
                @endphp
                @foreach(array_chunk($product->property,$count)[0] as $key => $text_name)
                    {{$text_name}}:
                    {{array_chunk($product->property,$count)[1][$key]}}
                    @if($key != array_key_last(array_chunk($product->property,$count)[0]))
                        ,
                    @endif
                @endforeach
            </p>
          </div>
          <div class="col-md-4">
            <h2 class="text-md-center font-weight-400">${{$product->precio}}</h2>
            <div>
              <a href="{{route('product_detail',['slug'=>$product->slug])}}" class="btn btn-secondary col-md-7 btn-md mx-md-auto d-md-block d-none position-absolute" style="bottom: 0px;left: 0px;right: 0px;">Quiero comprar</a>
            </div>
          </div>
        </div>
        @endforeach
        <div class="justify-content-center d-flex">
            {{$products->links()}}
        </div>
      </div>
    </div>
  </section>
  @include('web.layouts.footer_include_section')
@endsection
@section('script')
    <script src="{{asset('js/multi-range.js')}}"></script>
    <script src="{{asset('js/rating.js')}}"></script>
    <script>
        $('.multi-range-field > input').on('change',function (){
            if($(this).attr('step') == 1){
                $('#rangeMin').text('$'+$(this).val());
                $('#rangeMin').attr('href',$('#rangeMin').attr('href')+$(this).val());
            }else{
                $('#rangeMax').text('$'+$(this).val());
                $('#rangeMax').attr('href',$('#rangeMax').attr('href')+$(this).val());
            }
        });
        $('#dynamic_select').on('change', function () {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
            return false;
        });
        $(document).ready(function() {
            $('#multiRange').mdbRange({
                width: '100%',
                value: {
                    min: 0,
                    max: 5000
                },
                single: {
                    active: true,
                    bgThumbColor: '#e8427d',
                    textThumbColor: '#fff',
                    multi: {
                        active: true,
                        rangeLength: 1,
                        bgThumbColor: '#4285F4',
                        textThumbColor: '#000',
                    },
                }
            });
            $('#rateMe1').mdbRate();
            $('#rateMe2').mdbRate();
            $('.mdb-select').materialSelect();

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
        });
    </script>

@endsection

