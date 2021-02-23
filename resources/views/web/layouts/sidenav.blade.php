<div class="side-nav fixed bg-white" id="slide-out">
    <ul class="custom-scrollbar">
        <li class="d-flex container pb-4">
            <a class="pl-0 pl-3 pt-2" href="/">
                <img src="{{asset('image/logo_wibla_header.svg')}}" alt=""/>
            </a>
            <a class="closed button-collapse ml-auto p-3 pt-0" href="">
                <img src="{{asset('image/icono-x.svg')}}" alt="" srcset="" style="width: 30px;"/>
            </a>
        </li>
        <li>
            <ul class="collapsible collapsible-accordion col-8 mx-auto mt-5">
                <li> <a class="collapsible-header waves-effect" href="{{route('governmental')}}"><i class="fas fa-chevron-right"></i>Org. Gubernamentales</a></li>
                <li> <a class="collapsible-header waves-effect" href="{{route('educative')}}"><i class="fas fa-chevron-right"> </i>Org. Educativos</a></li>
                <li> <a class="collapsible-header waves-effect" href="{{route('business')}}"> <i class="fas fa-chevron-right"></i>Org. Empresariales</a></li>
                <li>
                    <div class="md-form md-outline mt-4 ml-3 mt-5 input-with-post-icon"><i class="fas fa-search input-prefix text-muted" style="position: absolute;right: 6px;font-size: 23px;top: 9px;"></i>
                        <input class="form-control text-primary form-control-lg" id="form1" type="text"/>
                        <label class="text-muted" for="form1">Buscar</label>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    <div class="sidenav-bg mask-strong"></div>
</div>
@yield('filter')
