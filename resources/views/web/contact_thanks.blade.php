<!DOCTYPE html>
<html lang="es">
  <head>   
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Wibla</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.10/css/all.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/wibla.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/multi-range.min.css"/>
    <link rel="stylesheet" href="css/rating.min.css"/>
  </head>
  <body>
    <header> 
      <div class="side-nav fixed bg-white" id="slide-out">
        <ul class="custom-scrollbar">
          <li class="d-flex container pb-4">   <a class="pl-0 pl-3 pt-2" href="/"><img src="image/logo_wibla_header.svg" alt=""/></a><a class="closed button-collapse ml-auto p-3 pt-0" href=""><img src="image/icono-x.svg" alt="" srcset="" style="width: 30px;"/></a></li>
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
      <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav bg-white">
        <div class="container">
          <div class="col-md-2 col-6 py-md-2 py-3"><a href="/"><img src="image/logo_wibla_header.svg" alt=""/></a></div>
          <div class="d-flex change-mode col-md-10 col-6 align-items-center" style="position: static;">
            <div class="d-flex d-md-none ml-auto"><a class="button-collapse" href="" data-activates="slide-out"><img src="image/icono-bar.svg" alt="" srcset="" style="width: 40px;"/></a></div>
            <ul class="nav navbar-nav nav-flex-icons d-md-flex d-none">
              <li class="nav-item"><a class="nav-link" href="#camaras"><span class="clearfix d-none d-sm-inline-block">Camaras</span></a></li>
              <li class="nav-item"><a class="nav-link" href="#lentes"><span class="clearfix d-none d-sm-inline-block">Lentes</span></a></li>
              <li class="nav-item"><a class="nav-link" href="#proyectores"><span class="clearfix d-none d-sm-inline-block">Proyectores</span></a></li>
              <li class="nav-item dropdown notifications-nav"><a class="nav-link align-items-center d-flex" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"><span class="d-none d-md-inline-block">Empresas</span><i class="fas fa-chevron-down"></i></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-4"></div>
                      <div class="col-md-6" style="padding-left: 4.8rem;"><a class="dropdown-item text-left" href="governmental.blade.php">Organismos Gubernamentales</a><a class="dropdown-item text-left" href="educative.blade.php">Organismos Educativos</a><a class="dropdown-item text-left" href="business.blade.php">Organismos Empresariales</a></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav nav-flex-icons ml-auto align-items-center d-md-flex d-none">
              <li class="nav-item">
                <div class="input-group">
                  <input class="form-control lupa-border" id="search" placeholder="Buscar..."/>
                  <div class="input-group-append" id="lupa-icon-content"><span class="input-group-text lupa-border-span"><i class="fas fa-search"></i></span></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <main style="padding-top: 4.5rem;">
        <section>
          <div class="container position-absolute-md absulute-center py-section-home d-md-flex d-block pt-5 px-md-5 position-absolute center-image-absolute" style="z-index: 99;">
            <div class="col-md-5 col-12 mt-container-home mt-md-5">
              <div class="pl-md-5">
                <h1 class="montserrat text-md-left text-white font42-px text-center"> Contacto</h1>
                <p class="mt-md-4 text-md-left font16-px text-white text-center">Si no encontrás tu consulta acá, podés <br> escribirnos a  <a class="text-white" href="mailto:ayuda@wibla.com">ayuda@wibla.com</a>con tu <br> pregunta, estamos para ayudarte.</p>
              </div>
            </div>
            <div class="col-md-7 col-12 mt-container-home pt-md-5">
              <div class="card d-flex py-5 col-md-10" style="border-radius: 20px;">
                <div class="px-md-5 col-md-12">
                  <h2 class="text-primary font40-px">¡Muchas gracias <br> enviar tu consulta!</h2>
                  <p class="font16-px">Nos pondremos en contacto a la brevedad para <br> responder tu dudo o reclamo.</p>
                </div>
              </div>
            </div>
          </div>
          <embed class="mx-auto d-none d-md-block" src="image/header_contacto.svg" style="width:100%"/>
          <embed class="mx-auto d-block d-md-none" src="image/header_contacto-m.svg" style="width:100%"/>
        </section>
        <section class="pt-md-5 py-5 pb-md-0 bg-white">
          <h2 class="text-center font49-px mt-md-4" data-aos="fade-down" data-aos-duration="500">Conoce todos nuestros productos</h2>
          <div class="container mt-md-5 my-5 my-md-0 pt-4 d-flex justify-content-md-center pb-md-5 mx-auto pt-md-4 overflow-x-auto scroll-count" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos" src="image/icono-camara-circulo.svg" alt="" srcset=""/>
              <div class="mt-4">
                <h3 class="font24-px text-center">Rápido!</h3>
              </div>
            </div>
            <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos" src="image/icono-lentes-circulo.svg" alt="" srcset=""/>
              <div class="mt-4">
                <h3 class="font24-px text-center">Ahorrás!</h3>
              </div>
            </div>
            <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos" src="image/icono-proyector-circulo.svg" alt="" srcset=""/>
              <div class="mt-4">
                <h3 class="font24-px text-center">Seguro!</h3>
              </div>
            </div>
            <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos" src="image/icono-memoria-circulo.svg" alt="" srcset=""/>
              <div class="mt-4">
                <h3 class="font24-px text-center">Seguro!</h3>
              </div>
            </div>
            <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos" src="image/icono-accesorio-circulo.svg" alt="" srcset=""/>
              <div class="mt-4">
                <h3 class="font24-px text-center">Seguro!</h3>
              </div>
            </div>
            <div class="col-md-2 col-4"><img class="mx-auto d-block iconos-productos" src="image/icono-gaming-circulo.svg" alt="" srcset=""/>
              <div class="mt-4">
                <h3 class="font24-px text-center">Seguro!</h3>
              </div>
            </div>
          </div>
          <div class="progress md-progress col-5 px-0 mx-auto d-md-none d-flex" style="height: .5rem !important;">
            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </section>
      </main>
    </main>
    <section class="mt-md-5 section-footer">
      <div class="container position-absolute center-image-absolute pt-md-5 d-md-flex">
        <div class="col-md-2 pt-5 pb-4 d-md-block d-flex"><img class="logo-footer" src="image/logo_wibla_footer.svg" alt="" srcset=""/>
          <div class="mt-md-4 ml-auto d-block d-md-none"><a class="link-footer"><img class="icono-hover" src="image/facebook.png" data-name="facebook"/></a><a class="link-footer mx-3"><img class="icono-hover" src="image/linkedin.png" data-name="linkedin"/></a><a class="link-footer"><img class="icono-hover" src="image/instagram.png" data-name="instagram"/></a></div>
        </div>
        <div class="col-md-7 pt-md-5 row">
          <div class="col-md-4 col-6">
            <p class="text-white mb-2">Productos</p>
            <div class="raya col-md-2 col-3 py-1-raya bg-white"></div>
            <ul class="footer-list mt-md-4 mt-4">
              <li><a href="#camaras"><i class="fas fa-chevron-right font10-px mr-md-2"> </i><span>Cámara</span></a></li>
              <li><a href="#lentes"> <i class="fas fa-chevron-right font10-px mr-md-2"> </i><span>Lentes</span></a></li>
              <li><a href="#proyectores"> <i class="fas fa-chevron-right font10-px mr-md-2"> </i><span>Proyectos</span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-6">
            <p class="text-white mb-2">Conocenos</p>
            <div class="raya col-md-2 col-3 py-1-raya bg-white"></div>
            <ul class="footer-list mt-md-4 mt-4">
              <li><a href="about_us.blade.php"> <i class="fas fa-chevron-right font10-px mr-md-2"> </i><span>Nosotros</span></a></li>
              <li><a href="faqs.blade.php"> <i class="fas fa-chevron-right font10-px mr-md-2"> </i><span>Preguntas frecuentes</span></a></li>
              <li><a href="contact.blade.php"> <i class="fas fa-chevron-right font10-px mr-md-2"> </i><span>Contacto</span></a></li>
            </ul>
          </div>
          <div class="col-md-4 d-md-block d-none">
            <p class="text-white">Siguenos</p>
            <div class="raya col-md-2 col-1 py-1-raya bg-white"></div>
            <div class="mt-md-4"><a class="link-footer"><img class="icono-hover" src="image/facebook.png" data-name="facebook"/></a><a class="link-footer mx-md-3"><img class="icono-hover" src="image/linkedin.png" data-name="linkedin"/></a><a class="link-footer"><img class="icono-hover" src="image/instagram.png" data-name="instagram"/></a></div>
          </div>
        </div>
        <div class="col-md-3 pt-md-5 pt-4">
          <p class="text-white mb-2">Newsletter
            <div class="raya col-md-2 col-1 py-1-raya bg-white"></div>
            <div class="mt-md-4">
              <div class="md-form md-outline footer-input-pl mt-4">
                <input class="form-control text-white" id="form1" type="text"/>
                <label for="form1">Example label</label>
              </div>
            </div>
          </p>
        </div>
      </div>
      <embed class="d-md-block d-none" src="image/fondo-footer.svg" type=""/>
      <embed class="d-md-none d-block" src="image/fondo-footer-m-1.svg" type="" style="width: 100%;"/>
    </section>
    <footer class="pt-0 bg-white">
      <!-- Copyright-->
      <div class="footer-copyright py-3 text-center">
        <div class="row container mx-auto">
          <div class="col-md-6 col-12 text-md-left text-center font12-px">2020 © Wibla. Todos los derechos reservados. </div>
          <div class="col-md-6 col-12 text-md-right text-center font12-px"><a class="mr-3 text-primary font-weight-500" href="#"> 
              <u>Terminos y Condiciones</u></a><a class="text-primary font-weight-500" href="#"> 
              <u>Política de Privacidad </u></a></div>
        </div>
      </div>
    </footer>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/mdb.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      $(document).ready(function() {
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
          $('.mdb-select').materialSelect();
      });
    </script>
    <script>
      $(document).ready(function() {
          AOS.init();
          // SideNav Button Initialization
          $(".button-collapse").sideNav({
              edge: 'right', // Choose the horizontal origin
              closeOnClick: false, // Closes side-nav on &lt;a&gt; clicks, useful for Angular/Meteor
              breakpoint: 5440, // Breakpoint for button collapse
              menuWidth: 240, // Width for sidenav
              timeDurationOpen: 500, // Time duration open menu
              timeDurationClose: 500, // Time duration open menu
              timeDurationOverlayOpen: 200, // Time duration open overlay
              timeDurationOverlayClose: 200, // Time duration close overlay
              easingOpen: 'easeInOutQuad', // Open animation
              easingClose: 'easeInOutQuad', // Close animation
          });
          $('.closed').on('click', function(){
              $('#sidenav-overlay').click();
          });
      });
      $(document).ready(function(){
          $(".link-footer").hover(
              function() {
                  $(this).find('.icono-hover').attr("src",'image/'+$(this).find('.icono-hover').data('name')+'-h.png');
              },
              function() {
                  $(this).find('.icono-hover').attr("src",'image/'+$(this).find('.icono-hover').data('name')+'.png');
              },
          );
          $( "#search" ).focus(function() {
              $( ".lupa-border-span" ).css('border-color','#e8427d');
          })
          .blur(function() {
              $('#search').removeClass('d-block').addClass('d-none');
              $( ".lupa-border-span" ).css('border-color','#d0d0d0');
              $('.lupa-border-span').removeClass('lupa-boder-span-hover').addClass('lupa-boder-span');
          });
          $( ".lupa-border-span" ).hover(function(){
              $(this).removeClass('lupa-boder-span').addClass('lupa-boder-span-hover');
              $('#search').removeClass('d-none').addClass('d-block');
              $( "#search" ).focus();
          });
      
      });
    </script>
  </body>
</html>