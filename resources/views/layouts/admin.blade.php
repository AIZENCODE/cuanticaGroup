<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!--  -->

    {{-- font aweson  --}}

    <script src="https://kit.fontawesome.com/925f4b0807.js" crossorigin="anonymous"></script>

    {{--  --}}



    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('css')


</head>

<body class="overflow-hidden">

    @php
        
        $links = [
            [
                'title' => 'Dashboard',
                'url' => route('admin.dashboard'),
                'active' => request()->routeIs('admin.dashboard'),
                'icon' => 'fa-solid fa-gauge-high',
            ],
            [
                'title' => 'Posts',
                'url' => route('admin.posts.index'),
                'active' => request()->routeIs('admin.posts.*'),
                'icon' => 'fa-solid fa-blog',
            ],
            [
                'title' => 'Categorias',
                'url' => route('admin.categories.index'),
                'active' => request()->routeIs('admin.categories.*'),
                'icon' => 'fa-solid fa-layer-group',
            ],
        ];
        
    @endphp

    {{-- <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">

            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between" >
                <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2">Cl</span><span
                        class="text-white">Aizen</span></h1>
                <button class="btn d-md-block d-block close-btn px-1 py-0 text-white"> <i
                        class="fa-solid fa-bars-staggered"></i></button>
            </div>

            <ul class="list-unstyled px-2">
                <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-home"></i>Dashboard</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-list"></i>Projects</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-comment"></i>Messages</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-envelope-open-text"></i>Services</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-users"></i>Customer</a></li>
            </ul>
            <hr class="h-color mx-2">

            <ul class="list-unstyled mx-2">
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-bars"></i>Settings</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fa fa-bell"></i>Notification</a></li>

            </ul>
        </div>

        <div class="content">

            <nav class="navbar navbar-expand-md bg-light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                        <a class="navbar-brand fs-4" href="#">Coding league</a>
                        <button class="btn px-1 py-0 open-btn"> <i class="fa fa-stream"></i></button>
                    </div>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Profile</a>
                            </li>
                     
                        </ul>
                    
                    </div>
                </div>
            </nav>

            <div class="dashboar-content px-3 py-4">
                <h2 class="fs-5">
                    Dashboard
                </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae facere sed debitis a deleniti nihil veritatis ex veniam odio, placeat, accusantium dolorem nobis vero. Officia praesentium obcaecati esse blanditiis id.</p>
            </div>
        </div>

    </div> --}}

    {{-- <div class="admin d-flex ">

        <div class="sidebar position-sticky ">
            <div class="sidebar__container h-100 shadow-sm overflow-auto">
                <a href="/"
                    class="text-decoration-none text-secondary d-flex gap-2 justify-content-center align-items-center w-100 mt-3 px-4">
                    <img src="img/logo/logo.png" class="logo" alt="">
                    <h2 class="fw-bold fs-5 pt-2">Cuantica Group</h2>
                </a>

                <div class="sidebar__links d-flex flex-column  mt-5">


                    @foreach ($links as $link)
                    <a href="{{$link['url']}}"
                    class="sidebar__item text-decoration-none d-flex gap-3 align-items-center {{ $link['active'] ? 'sidebar__item--active' : ''}}"><i
                        class="{{$link['icon']}} align-self-center "></i><span>{{$link['title']}}</span></a>
                    @endforeach

                   
                    
                </div>
            </div>
        </div>

        <div class="content d-flex flex-column w-100">

            <nav class="navbar navbar-expand-lg py-3 bg-white position-sticky top-0 shadow-sm ">
                <div class="container-fluid px-2 px-lg-4">
                    <div class="navbar-brand d-flex flex-column gap-1 text-dark">
                         <button class="btn px-1 py-0 open-btn"> <i class="fa fa-stream"></i></button>
                        <h5 class="fw-bold p-0 m-0">Hola {{auth()->user()->name}}</h5>
                        <p class="fs-6 p-0 m-0 fw-normal">Welcome back to dashboard.</p>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <div
                            class="nav__items d-flex  gap-5 justify-content-center align-items-center align-content-center ms-auto mt-3 mt-lg-0">

                            <a href="" class="nav__icon"><i class="fa-solid fa-bell "></i>  <span class="position-absolute nav__count top-0 start-100 translate-middle badge rounded-pill ">
                                1
                                <span class="visually-hidden">unread messages</span>
                              </span></a>
                            <span class="d-flex gap-3 justify-content-center align-items-center align-content-center">
                                <span class="fw-bold">{{auth()->user()->name}}</span>
                                <img src="img/avatar/img4.jpg" class="nav__avatar" alt="">
                            </span>

                        </div>

                    </div>
                </div>
            </nav>

            <main class="bg-light h-100 w-100 m-0 overflow-auto px-4 py-5">

           

                {{ $slot }}
            </main>
        </div>


    </div> --}}


    <div class="main__container d-flex ">

        <div class="sidebar shadow-sm  px-3 pt-3 top-0" id="side_nav">

            <div class="sidebar__buttons  pb-4 d-flex justify-content-between">
                <a href="/"
                    class="text-decoration-none text-secondary d-flex gap-2 justify-content-center align-items-center w-100 mt-3 px-4">
                    <img src="{{ asset('img/logo/logo.png') }}" class="logo" alt="">
                    <h2 class="fw-bold fs-5 pt-2">Cuantica Group</h2>
                </a>
                <button class="btn d-md-none d-block close-btn px-1 py-0 text-primary"> <i
                        class="fa-solid fa-bars-staggered"></i></button>
            </div>

            <div class="sidebar__links d-flex flex-column  mt-5">


                @foreach ($links as $link)
                    <a href="{{ $link['url'] }}"
                        class="sidebar__item text-decoration-none d-flex gap-3 align-items-center {{ $link['active'] ? 'sidebar__item--active' : '' }}"><i
                            class="{{ $link['icon'] }} align-self-center "></i><span>{{ $link['title'] }}</span></a>
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
                                <p class="fs-6 p-0 m-0 fw-normal">Welcome back to dashboard.</p>
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
                                <img src="img/avatar/img4.jpg" class="nav__avatar" alt="">
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





    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('.open-btn').on('click', function() {
            $('.sidebar').addClass('active');
        });
        $('.close-btn').on('click', function() {
            $('.sidebar').removeClass('active');
        });
    </script>


    @stack('js')

</body>

</html>
