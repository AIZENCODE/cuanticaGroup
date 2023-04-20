<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/logo/cuantica.ico') }}">


    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!--  -->

    {{-- font aweson  --}}

    <script src="https://kit.fontawesome.com/925f4b0807.js" crossorigin="anonymous"></script>

    {{--  --}}


    {{-- DATATABLE --}}

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css">

    {{--  --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('css')

    @livewireStyles
</head>

<body class="overflow-hidden">

    @php
        
        $links = [
            [
                'title' => 'Dashboard',
                'url' => route('admin.dashboard'),
                'active' => request()->routeIs('admin.dashboard'),
                'icon' => 'fa-solid fa-gauge-high',
                'can' => 'admin.dashboard',
            ],
            [
                'title' => 'Informacion',
                'url' => route('admin.informacion.index'),
                'active' => request()->routeIs('admin.informacion.*'),
                'icon' => 'fa-solid fa-circle-info',
                'can' => 'admin.informacion.index',
            ],
            [
                'title' => 'Roles',
                'url' => route('admin.roles.index'),
                'active' => request()->routeIs('admin.roles.*'),
                'icon' => 'fa-solid fa-address-book',
                'can' => 'admin.roles.index',
            ],
            [
                'title' => 'Usuarios',
                'url' => route('admin.usuarios.index'),
                'active' => request()->routeIs('admin.usuarios.*'),
                'icon' => 'fa-solid fa-users',
                'can' => 'admin.usuarios.index',
            ],
            [
                'title' => 'Enfoques',
                'url' => route('admin.enfoques.index'),
                'active' => request()->routeIs('admin.enfoques.*'),
                'icon' => 'fa-solid fa-handshake',
                'can' => 'admin.enfoques.index',
            ],
            [
                'title' => 'Servicios',
                'url' => route('admin.services.index'),
                'active' => request()->routeIs('admin.services.*'),
                'icon' => 'fa-solid fa-bell-concierge',
                'can' => 'admin.services.index',
            ],
            [
                'title' => 'Portafolio',
                'url' => route('admin.portafolios.index'),
                'active' => request()->routeIs('admin.portafolios.*'),
                'icon' => 'fa-solid fa-briefcase',
                'can' => 'admin.portafolios.index',
            ],
            [
                'title' => 'Equipo',
                'url' => route('admin.equipo.index'),
                'active' => request()->routeIs('admin.equipo.*'),
                'icon' => 'fa-solid fa-people-group',
                'can' => 'admin.equipo.index',
            ],
            [
                'title' => 'Clientes',
                'url' => route('admin.clientes.index'),
                'active' => request()->routeIs('admin.clientes.*'),
                'icon' => 'fa-solid fa-city',
                'can' => 'admin.clientes.index',
            ],
            [
                'title' => 'Opiniones',
                'url' => route('admin.opiniones.index'),
                'active' => request()->routeIs('admin.opiniones.*'),
                'icon' => 'fa-solid fa-cloud',
                'can' => 'admin.opiniones.index',
            ],
            [
                'title' => 'Posts',
                'url' => route('admin.posts.index'),
                'active' => request()->routeIs('admin.posts.*'),
                'icon' => 'fa-solid fa-blog',
                'can' => 'admin.posts.index',
            ],
            [
                'title' => 'Categorias',
                'url' => route('admin.categories.index'),
                'active' => request()->routeIs('admin.categories.*'),
                'icon' => 'fa-solid fa-layer-group',
                'can' => 'admin.categories.index',
            ],
            [
                'title' => 'Etiquetas',
                'url' => route('admin.etiquetas.index'),
                'active' => request()->routeIs('admin.etiquetas.*'),
                'icon' => 'fa-solid fa-tags',
                'can' => 'admin.etiquetas.index',
            ],
        ];
        
    @endphp


    @if (session('info'))
        <div class="alert alert-{{ session('tipo') }} alert-dismissible fade show" role="alert">
            <strong>{{ session('info') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="main__container d-flex ">




        <div class="sidebar shadow-sm  px-3 pt-3 top-0" id="side_nav">

            <div class="sidebar__buttons  pb-4 d-flex justify-content-between">
                <a href="/"
                    class="text-decoration-none text-secondary d-flex gap-2 justify-content-center align-items-center w-100 mt-3 px-4">
                    <img src="{{ $enterprise->image }}" class="logo" alt="">
                    <h2 class="fw-bold fs-5 pt-2">{{ $enterprise->name }}</h2>
                </a>
                <button class="btn d-md-none d-block close-btn px-1 py-0 text-primary"> <i
                        class="fa-solid fa-bars-staggered"></i></button>
            </div>

            <div class="sidebar__links d-flex flex-column  mt-5">


                @foreach ($links as $link)
                    @can($link['can'])
                        <a href="{{ $link['url'] }}"
                            class="sidebar__item text-decoration-none d-flex gap-3 align-items-center {{ $link['active'] ? 'sidebar__item--active' : '' }}"><i
                                class="{{ $link['icon'] }} align-self-center "></i><span>{{ $link['title'] }}</span></a>
                    @endcan
                @endforeach



            </div>

        </div>

        <div class="content">

            <nav class="navbar navbar-expand-lg py-3 bg-white position-sticky top-0 shadow-sm ">
                <div class="container-fluid px-2 px-lg-4">
                    <div class="navbar-brand d-flex flex-column gap-1 text-dark">
                        <div class="d-flex gap-2">
                            <button class="btn px-1 py-0 d-md-none d-block  open-btn"> <i
                                    class="fa fa-stream"></i></button>
                            <div class="texts__adminnav">
                                <h5 class="fw-bold p-0 m-0">Hola {{ auth()->user()->name }}</h5>
                                <p class="fs-6 p-0 m-0 fw-normal">Bienvenido de nuevo al panel de control.</p>
                            </div>
                        </div>


                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <div
                            class="nav__items d-flex  gap-5 justify-content-center align-items-center align-content-center ms-auto mt-3 mt-lg-0">

                            <a href="" class="nav__icon"><i class="fa-solid fa-bell "></i> <span
                                    class="position-absolute nav__count top-0 start-100 translate-middle badge rounded-pill ">
                                    1
                                    <span class="visually-hidden">unread messages</span>
                                </span></a>
                            <span class="d-flex gap-3 justify-content-center align-items-center align-content-center">
                                <span class="fw-bold">{{ auth()->user()->name }}</span>
                                <img src="{{ auth()->user()->image }}" class="nav__avatar" alt="">
                            </span>

                        </div>

                    </div>
                </div>
            </nav>


            <main class="mt-5 px-3 ">
                {{ $slot }}
            </main>
        </div>

    </div>




    {{-- DATATABLE --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>
    {{--  --}}


    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    <script>
        // DATATABLE
        $(document).ready(function() {
            $('#example').DataTable({
                resposive: true,
                // autoWidth: false
                "order": [
                    [0, "desc"]
                ],
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },


            });

            // FIN DATATABLE


            $('.open-btn').on('click', function() {
                $('.sidebar').addClass('active');
            });
            $('.close-btn').on('click', function() {
                $('.sidebar').removeClass('active');
            });
        });
    </script>


    @stack('js')
    @livewireScripts
</body>

</html>
