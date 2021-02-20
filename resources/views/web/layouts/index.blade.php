<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicoin/apple-touch-icon.png')}}">
    <link rel="shortcut icon" sizes="16x16 32x32" href="{{asset('favicoin/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" href="{{asset('favicoin/android-chrome-192x192.png')}}" sizes=192x192>
    <link rel="icon" type="image/png" href="{{asset('favicoin/android-chrome-512x512.png')}}" sizes=512x512>
    <title>Wibla</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.10/css/all.css"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/wibla.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    @yield('style')
</head>
<body>
<header>
    @include('web.layouts.sidenav')
    @include('web.layouts.menu')
</header>
<main style="padding-top: 4.5rem;">
    @yield('content')
</main>
@include('web.layouts.footer')
@yield('script')
<script>

    $(document).ready(function (){
        var myTag = $('.truncate').text();
        if (myTag.length > 30) {
            var truncated = myTag.trim().substring(0, 30).split(" ").slice(0, -1).join(" ") + "…";
            $('').text(truncated);
        }
        $('.truncate').each(function(){
            var longitud=$(this).data('text-count');
            if($(this).text().length > longitud){

                var texto=$(this).text().substring(0,longitud);
                var indiceUltimoEspacio= texto.lastIndexOf(' ');
                texto=texto.substring(0,indiceUltimoEspacio) +'<span class="puntos">...</span>';

                var primeraParte = '<span class="texto-mostrado">' + texto + '</span>';
                var segundaParte = '<span class="texto-ocultado">' + $(this).text().substring(indiceUltimoEspacio,$(this).text().length - 1) + '</span>';
                $(this).html(primeraParte);

            }
        });
    });

</script>
</body>
</html>