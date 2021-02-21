<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav bg-white">
    <div class="container">
        <div class="col-md-2 col-6 py-md-2 py-3">
            <a href="/"><img src="{{asset('image/logo_wibla_header.svg')}}" alt="" /></a>
        </div>
        <div class="d-flex change-mode col-md-10 col-6 align-items-center" style="position: static;">
            <div class="d-flex d-md-none ml-auto">
                <a class="button-collapse" href="" data-activates="slide-out"><img src="{{asset('image/icono-bar.svg')}}" alt="" srcset="" style="width: 40px;" /></a>
            </div>
            <ul class="nav navbar-nav nav-flex-icons d-md-flex d-none">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/#camaras')}}"><span class="clearfix d-none d-sm-inline-block">Camaras</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/#lentes')}}"><span class="clearfix d-none d-sm-inline-block">Lentes</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/#proyectores')}}"><span class="clearfix d-none d-sm-inline-block">Proyectores</span></a>
                </li>
                <li class="nav-item dropdown notifications-nav">
                    <a class="nav-link align-items-center d-flex" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"><span class="d-none d-md-inline-block">Empresas</span><i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-6" style="padding-left: 4.8rem;">
                                    <a class="dropdown-item text-left" href="{{route('governmental')}}">Organismos Gubernamentales</a>
                                    <a class="dropdown-item text-left" href="{{route('educative')}}">Organismos Educativos</a>
                                    <a class="dropdown-item text-left" href="{{route('business')}}">Organismos Empresariales</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav nav-flex-icons ml-auto align-items-center d-md-flex d-none">
                <li class="nav-item">
                    <div class="input-group">
                        <input class="form-control lupa-border" name="search" id="search" autocomplete="off" placeholder="Buscar..." />
                        <div class="input-group-append" id="lupa-icon-content">
                            <span class="input-group-text lupa-border-span"><i class="fas fa-search"></i></span>
                        </div>
                        <div id="search-desplegable" class="d-none">
                          
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
