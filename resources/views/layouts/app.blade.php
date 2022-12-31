<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!--  -->

    <script src="https://kit.fontawesome.com/925f4b0807.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="">

    @php
        
    $links = [
        [
            'title' => 'Sobre Nosotros',
            'url' => route('nosotros.index'),
            'active' => request()->routeIs('nosotros.*'),
        ],
        [
            'title' => 'Servicios',
            'url' => route('services.index'),
            'active' => request()->routeIs('services.*'),
       
        ],
        [
            'title' => 'Portafolio',
            'url' => route('portafolios.index'),
            'active' => request()->routeIs('portafolios.*'),
       
        ],
        [
            'title' => 'Blog',
            'url' => route('blog.index'),
            'active' => request()->routeIs('blog.*' ),
       
        ],
        [
            'title' => 'Contacto',
            'url' => route('contacts.index'),
            'active' => request()->routeIs('contacts.*'),
       
        ],
        [
            'title' => 'Iniciar Sesion',
            'url' => route('sesion.show'),
            'active' => request()->routeIs('sesion.show'),
       
        ],
    ];
    
    @endphp


    @include('layouts.client.navigation')
    <main>
        {{ $slot }}
    </main>
    @include('layouts.client.footer')



    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 50,
                depth: 200,
                modifier: 1,
                slideShadows: false,
            },
            loop: true,

        });
    </script>


    <!-- LightWidget WIDGET -->
    <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>

    @livewireScripts
</body>

</html>
