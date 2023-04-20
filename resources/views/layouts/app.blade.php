<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/logo/cuantica.ico') }}">


   

    <script src="https://kit.fontawesome.com/925f4b0807.js" crossorigin="anonymous"></script>
    <!-- Scripts -->

    @stack('css')
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




    @stack('js')

        

    @livewireScripts
</body>

</html>
