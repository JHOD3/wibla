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
                <li> <a class="collapsible-header waves-effect" href="'gubernamentales.html"><i class="fas fa-chevron-right"></i>Org. Gubernamentales</a></li>
                <li> <a class="collapsible-header waves-effect" href="educative.blade.php"><i class="fas fa-chevron-right"> </i>Org. Educativos</a></li>
                <li> <a class="collapsible-header waves-effect" href="business.blade.php"> <i class="fas fa-chevron-right"></i>Org. Empresariales</a></li>
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
<div class="side-nav fixed bg-white" id="slide-out-filter">
    <ul class="custom-scrollbar">
        <li class="d-flex container pb-4">   <a class="pl-0 pl-3 pt-2" href="/"><img src="image/logo_wibla_header.svg" alt=""/></a><a class="closed button-collapse ml-auto p-3 pt-0" href=""><img src="image/icono-x.svg" alt="" srcset="" style="width: 30px;"/></a></li>
    </ul>
    <div class="accordion md-accordion accordion-3" id="accordionEx194" role="tablist" aria-multiselectable="true">
        <div class="card">
            <div class="card-header border-0" id="heading4" role="tab">
                <a>
                    <p class="mb-0 mt-3 text-muted">Filtros</p>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-header border-bottom py-2" id="heading4" role="tab"><a data-toggle="collapse" data-parent="#accordionEx194" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                    <p class="mb-0 mt-0 text-muted">Marca<i class="fas fa-angle-down rotate-icon mt-3"></i></p></a></div>
            <div class="collapse show" id="collapse4" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                <div class="card-body pt-0">
                    <ul class="mt-md-3">
                        <li><a href="#">Nikon (16)</a></li>
                        <li><a href="#">Cannon (4)</a></li>
                        <li><a href="#">Sony (8)</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header border-bottom py-2" id="heading5" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    <p class="mb-0 mt-0 text-muted">Modelo<i class="fas fa-angle-down rotate-icon mt-3"></i></p></a></div>
            <div class="collapse" id="collapse5" role="tabpanel" aria-labelledby="heading5" data-parent="#accordionEx194">
                <div class="card-body pt-0">
                    <p>
                    <ul class="mt-md-3">
                        <li><a href="#">Digitales (16)</a></li>
                        <li><a href="#">Bridge (4)</a></li>
                        <li><a href="#">Reflex (8)</a></li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header border-bottom py-2" id="heading6" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                    <p class="mb-0 mt-0 text-muted">Rengo de precio <i class="fas fa-angle-down rotate-icon mt-3"></i></p></a></div>
            <div class="collapse" id="collapse6" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx194">
                <div class="card-body pt-0">
                    <form class="multi-range-field my-5 pb-5">
                        <input class="multi-range col-12" id="multi6" type="range"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header border-bottom py-2" id="heading6" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                    <p class="mb-0 mt-0 text-muted">Resolución <i class="fas fa-angle-down rotate-icon mt-3"></i></p></a></div>
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
            <div class="card-header border-bottom py-2" id="heading6" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                    <p class="mb-0 mt-0 text-muted">Calificación <i class="fas fa-angle-down rotate-icon mt-3"></i></p></a></div>
            <div class="collapse" id="collapse8" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx194">
                <div class="card-body pt-0">
                    <div class="container mt-3"><span class="rateMe1" id="rateMe2"></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidenav-bg mask-strong"></div>
</div>
<div class="side-nav fixed bg-white" id="slide-out-order">
    <ul class="custom-scrollbar">
        <li class="d-flex container pb-4">   <a class="pl-0 pl-3 pt-2" href="/"><img src="image/logo_wibla_header.svg" alt=""/></a><a class="closed button-collapse ml-auto p-3 pt-0" href=""><img src="image/icono-x.svg" alt="" srcset="" style="width: 30px;"/></a></li>
        <li>
            <ul class="collapsible collapsible-accordion col-8 mx-auto mt-5">
                <li> <a class="collapsible-header waves-effect" href="c_dai.html"><i class="fas fa-chevron-right"></i>Descatados</a></li>
                <li> <a class="collapsible-header waves-effect" href="c_btc.html"><i class="fas fa-chevron-right"> </i>En Oferta</a></li>
                <li> <a class="collapsible-header waves-effect" href="blog"> <i class="fas fa-chevron-right"></i>Nuevos </a></li>
                <li> <a class="collapsible-header waves-effect" href="blog"> <i class="fas fa-chevron-right"></i>Order 1 </a></li>
                <li> <a class="collapsible-header waves-effect" href="blog"> <i class="fas fa-chevron-right"></i>Order 2 </a></li>
            </ul>
        </li>
    </ul>
</div>