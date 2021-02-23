<section class="mt-md-5 section-footer">
    <div class="container position-absolute center-image-absolute pt-md-5 d-md-flex">
        <div class="col-md-2 pt-5 pb-4 d-md-block d-flex">
            <img class="logo-footer" src="{{asset('image/logo_wibla_footer.svg')}}" alt="" srcset=""/>
            <div class="mt-md-4 ml-auto d-block d-md-none">
                <a class="link-footer">
                    <img class="icono-hover" src="{{asset('image/facebook.png')}}" data-name="facebook"/>
                </a>
                <a class="link-footer mx-3">
                    <img class="icono-hover" src="{{asset('image/linkedin.png')}}" data-name="linkedin"/>
                </a>
                <a class="link-footer">
                    <img class="icono-hover" src="{{asset('image/instagram.png')}}" data-name="instagram"/>
                </a>
            </div>
        </div>
        <div class="col-md-7 pt-md-5 row">
            <div class="col-md-4 col-6">
                <p class="text-white mb-2">Productos</p>
                <div class="raya col-md-2 col-3 py-1-raya bg-white"></div>
                <ul class="footer-list mt-md-4 mt-4">
                    <li><a href="{{route('product_list', ['category'=>'camaras'])}}"><i class="fas fa-chevron-right font10-px mr-md-2"> </i><span>Cámara</span></a></li>
                    <li><a href="{{route('product_list' , ['category'=>'lentes'])}}"> <i class="fas fa-chevron-right font10-px mr-md-2"> </i><span>Lentes</span></a></li>
                    <li><a href="{{route('product_list', ['category'=>'proyectores'])}}"> <i class="fas fa-chevron-right font10-px mr-md-2"> </i><span>Proyectores</span></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-6">
                <p class="text-white mb-2">Conocenos</p>
                <div class="raya col-md-2 col-3 py-1-raya bg-white"></div>
                <ul class="footer-list mt-md-4 mt-4">
                    <li><a href="{{route('aboutUs')}}"> <i class="fas fa-chevron-right font10-px mr-md-2"> </i><span>Nosotros</span></a></li>
                    <li><a href="{{route('faqs')}}"> <i class="fas fa-chevron-right font10-px mr-md-2"> </i><span>Preguntas frecuentes</span></a></li>
                    <li><a href="{{route('contact')}}"> <i class="fas fa-chevron-right font10-px mr-md-2"> </i><span>Contacto</span></a></li>
                </ul>
            </div>
            <div class="col-md-4 d-md-block d-none">
                <p class="text-white">Seguinos</p>
                <div class="raya col-md-2 col-1 py-1-raya bg-white"></div>
                <div class="mt-md-4">
                    <a class="link-footer">
                        <img class="icono-hover" src="{{asset('image/facebook.png')}}" data-name="facebook"/>
                    </a>
                    <a class="link-footer mx-md-3">
                        <img class="icono-hover" src="{{asset('image/linkedin.png')}}" data-name="linkedin"/>
                    </a>
                    <a class="link-footer">
                        <img class="icono-hover" src="{{asset('image/instagram.png')}}" data-name="instagram"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 pt-md-5 pt-4">
            <p class="text-white mb-2">Newsletter
            <div class="raya col-md-2 col-1 py-1-raya bg-white"></div>
            <div class="mt-md-4" id="thanks">
                <form id="form_newlatter">
                    <div class="md-form md-outline footer-input-pl mt-4">
                        <input class="form-control text-white" id="email" name="email" type="text" autocomplete="off"/>
                        <label for="form1">Tu correo</label>
                        <button class="btn-newlatter" type="submit">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
            </p>
        </div>
    </div>
    <embed class="d-md-block d-none" src="{{asset('image/fondo-footer.svg')}}" type=""/>
    <embed class="d-md-none d-block" src="{{asset('image/fondo-footer-m-1.svg')}}" type="" style="width: 100%;"/>
</section>
<footer class="pt-0 bg-white">
    <!-- Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="row container mx-auto">
            <div class="col-md-6 col-12 text-md-left text-center font12-px">2020 © Wibla. Todos los derechos reservados. </div>
            {{--<div class="col-md-6 col-12 text-md-right text-center font12-px"><a class="mr-3 text-primary font-weight-500" href="#">
                    <u>Terminos y Condiciones</u></a><a class="text-primary font-weight-500" href="#">
                    <u>Política de Privacidad </u></a></div>--}}
        </div>
    </div>
</footer>
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdb.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    $(document).ready(function() {
        AOS.init({
            once: true,
            mirror: true,
        });
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
    $('#search').on('keyup',function (e) {
        let inputSearch = $(this).val();
        buscar(inputSearch);
    });
    $('#search').on('keypress',function (e) {
        let inputSearch = $(this).val();
        if(e.which == 13) {
            buscar(inputSearch);
        }
    });
    $('#search').blur(function (e) {
        let desplegable = $('#search-desplegable');
        desplegable.removeClass('d-block').addClass('d-none');
    });
    function buscar(inputSearch){
        let desplegable = $('#search-desplegable');
        $.ajax({
            url:"{{route('ajaxSearch')}}",
            type:'post',
            typeData:'json',
            headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: { search:inputSearch}
        }).done(function (products){
            let  html = '';
            if (products != '') {

                desplegable.removeClass('d-none').addClass('d-block');
                products.forEach(function (product, index) {
                    html += '<a class="link-search" onclick="alert(olha)" href="{{url('product_list')}}?product='+product.name+'">' +
                                '<div class="px-md-3 py-md-2" style="line-height: 12px;">' +
                                    '<div><small>' + product.categoria + '</small></div>' +
                                    '<span>' + product.name + '</span>' +
                                '</div>' +
                            '</a>';

                });
            }else{
                desplegable.removeClass('d-none').addClass('d-block');
                html += '<div class="link-search">' +
                            '<div class="px-md-3 py-md-2" style="line-height: 12px;">' +
                                '<div><small> No hay resultados </small></div>' +
                                '<span></span>' +
                            '</div>' +
                        '</div>';
            }
            desplegable.html(html);
        });
    }
    $(document).ready(function(){
        let desplegable = $('#search-desplegable');
        $(".link-footer").hover(
            function() {
                $(this).find('.icono-hover').attr("src",'image/'+$(this).find('.icono-hover').data('name')+'-h.png');
            },
            function() {
                $(this).find('.icono-hover').attr("src",'image/'+$(this).find('.icono-hover').data('name')+'.png');
            },
        );

        $( "#search" ).hover(function() {
            $( ".lupa-border-span" ).css('border-color','#e8427d');
        }).focusout(function(event) {
            if($("#search").val() == '') {
                $('#search').removeClass('d-block').addClass('d-none');
                $(".lupa-border-span").css('border-color', '#d0d0d0');
                $('.lupa-border-span').removeClass('lupa-boder-span-hover').addClass('lupa-boder-span');
                desplegable.removeClass('d-block').addClass('d-none');
            }
            $(".lupa-border-span").css('border-color', '#d0d0d0');
        });
        $( ".lupa-border-span" ).mouseover(function(){
            $(this).removeClass('lupa-boder-span').addClass('lupa-boder-span-hover');
            $( ".lupa-border-span" ).css('border-color','#e8427d');
            $('#search').removeClass('d-none').addClass('d-block');
            $( "#search" ).focus();
        });
    });

    $('#form_newlatter').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url:"{{route('sendNewlatter')}}",
            type:'post',
            typeData:'json',
            headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: { email:$('#email').val()}
        }).done(function (response){
            if(response == true){
                $('#thanks').html('<span class="text-white">Gracias por unirse a nuestra lista.</span>');
            }else{
                $('#thanks').html('<span class="text-white">No se pudo enviar el email.</span>');
            }
        });
    });

</script>
