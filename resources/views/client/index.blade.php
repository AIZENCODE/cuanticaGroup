<x-app-layout>

    @push('css')
        <!-- swiper -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
        <!--  -->
    @endpush


    <header>
        <div class="header__main position-relative d-grid align-content-center ">
            <div class="header__container container  ">
                <div
                    class="row row-cols-1 row-cols-xl-2 gap-2 gap-sm-5 gap-xl-0 align-items-center header__contenido pt-5">
                    <div class="col header__texts order-2 order-xl-1">


                        @php
                            $myvalue = $enterprise->banner_titulo;
                            $arr = explode(' ', trim($myvalue));
                            
                        @endphp



                        <h1 class="header__title text-secondary display-1">

                            {{ $arr[0] }}

                            <span class="text-primary d-block">
                                @php
                                    
                                    foreach ($arr as $ar) {
                                        if ($ar != $arr[0]) {
                                            echo $ar . ' ';
                                        }
                                    }
                                @endphp
                            </span>
                        </h1>
                        <p class="header__paragraph">
                            {{ $enterprise->banner_text }}
                        </p>

                        <a href="#" class="btn btn-primary text-white">Conocenos</a>
                    </div>


                    <div class="col header__picture justify-content-center d-grid align-self-center order-xl-2">



                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                
                                <div class="carousel-item active" data-bs-interval="5000">
                                    <img src="img/R.png" alt=""
                                        class="header__img header__img--carru img-fluid">
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="img/crea-tu-sitio-web-gratis.png" alt=""
                                        class="header__img header__img--carru img-fluid">
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="img/paginas-web.png" alt=""
                                        class="header__img header__img--carru img-fluid">
                                </div>
                            </div>
                        </div>

                        <!-- <img src="img/R.png" alt="" class="header__img img-fluid"> -->

                    </div>

                </div>

            </div>
            <div class="circle__1"></div>
            <div class="circle__2"></div>

        </div>

    </header>


    <main class="main position-relative">
        <div class="circle__3"></div>

        <!-- Informacion -->
        <section class="informacion  position-relative py-2 pt-lg-4">
            <div class="informacion__container container my-5 py-2 py-lg-5 d-grid gap-4">
                <h2 class="title text-secondary">NUESTRO ENFOQUE DE<span class="text-primary"> DESARROLLO</span>
                </h2>

                <div
                    class="pasatiempos d-flex flex-wrap gap-5 text-center position-relative justify-content-around mt-3">

                    @foreach ($approaches as $approach)
                        <div class="pasatiempo__item" style="--i:{{ $approach->color }}">
                            <div class="pasatiempo__icon">
                                <p></p>
                                <img src="{{ $approach->image }}" class="pasatiempo__img" alt="{{ $approach->name }}">
                            </div>
                            <div class="pasatiempo__content">
                                <h5 class="pasatiempo__title fw-bold">{{ $approach->name }}</h5>
                                <p class="pasatiempo__paragraph">{{ $approach->description }}</p>
                            </div>
                        </div>
                    @endforeach




                </div>

                <svg class="infomacion__wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                    preserveAspectRatio="none">
                    <path fill="#F1F9F8" fill-opacity="1"
                        d="M0,0L205.7,160L411.4,64L617.1,288L822.9,64L1028.6,288L1234.3,128L1440,192L1440,320L1234.3,320L1028.6,320L822.9,320L617.1,320L411.4,320L205.7,320L0,320Z">
                    </path>
                </svg>
            </div>

        </section>
        <!-- Fin Informacion -->



        @if ($services->count())
            <!-- Servicios -->
            <section class="services position-relative py-2 py-lg-5 ">

                <div class="services__container container my-5 py-2 py-lg-5 ">

                    <div class="services__contentone rounded-5  position-relative">
                        <span class="title__service ">
                            <h2 class="title title__item  m-0 text-secondary  rounded-5 ">Nuestros <span
                                    class="text-primary">Servicios</span></h2>
                        </span>
                        <div class="services__contentone services__contentone--top   "></div>
                        <div class="services__contentone services__contentone--bottom "></div>

                    </div>



                    <div class="services__contenttwo  rounded-5 overflow-hidden shadow-lg">
                        @foreach ($services as $service)
                            <div
                                class="{{ $service->id }} p-3 h-100 services__contenttw rounded-5 shadow-lg position-relative m-0 row row-cols-1 row-cols-lg-2  justify-content-center align-items-center">
                                <div class="services__texts m-0 order-2 order-lg-1 pt-4 pt-lg-0">
                                    <h2 class="services__title text-primary ">{{ $service->name }}</h2>

                                    <p class="services__paragraph text-secondary">{{ $service->description }}</p>
                                    <a href="{{ route('services.show', $service) }}"
                                        class="btn btn-outline-secondary">Mas
                                        informacion</a>
                                </div>

                                <img src="{{ $service->image }}" class="services__img m-0 order-1 order-lg-2"
                                    alt="">
                            </div>
                        @endforeach
                    </div>





                    <div
                        class="services__categorias m-0 row row-cols-3 row-cols-lg-1 align-content-center p-0 py-lg-3 ">


                        @foreach ($services as $service)
                            <div class="{{ $service->id }} row m-0 row-cols-2   service__item  text-center justify-content-center align-items-center gap-2 py-2 "
                                data-filter="{{ $service->id }}">

                                <div
                                    class="services__pictureico d-flex justify-content-center align-content-center align-items-center text-center">
                                    <img src="{{ $service->ico }}" class="service__icon" alt="">
                                </div>

                                <h5 class="service__categorie p-0 m-0">{{ $service->name }}
                                </h5>
                            </div>
                        @endforeach








                        {{-- <div
                    class="row m-0 row-cols-2  service__item service__item--active text-center justify-content-center align-items-center gap-2 py-2 ">

                    <div class="services__pictureico text-center">
                        <img src="img/categories/las-compras-en-linea.png" class="service__icon" alt="">
                    </div>

                    <h5 class="service__categorie p-0 m-0">{{$service->name}}
                    </h5>
                </div> 
                   
                    <div
                        class=" row m-0 row-cols-2  service__item text-center justify-content-center align-items-center gap-2 py-2 ">

                        <div class="services__pictureico text-center">
                            <img src="img/categories/las-compras-en-linea.png" class="service__icon" alt="">
                        </div>

                        <h5 class="service__categorie  p-0 m-0"> Página
                            De Comercio
                        </h5>
                    </div>
                    <div
                        class=" row m-0 row-cols-2   service__item  text-center justify-content-center align-items-center gap-2 py-2 ">

                        <div class="services__pictureico text-center ">
                            <img src="img/categories/las-compras-en-linea.png" class="service__icon" alt="">
                        </div>

                        <h5 class="service__categorie  p-0 m-0">Developer Cuantica
                        </h5>
                    </div>  --}}

                    </div>

                    <span class="services__buttom d-flex px-4 justify-content-center align-items-center">
                        <a href="{{ route('services.index') }}" class="btn btn-secondary ">Ver todos</a>

                    </span>

                </div>

            </section>
            <!-- Fin Servicios -->
        @endif


        {{-- Clientes --}}

        <section class="clientes position-relative  py-2 py-lg-4">

            <div class="clientes__container container my-5  py-2 py-lg-5 d-grid gap-4">
                <h2 class="title text-secondary">Clientes que confían en <span class="text-primary">nosotros</span>
                </h2>
                <div class="row row-cols-1 justify-content-center position-relative p-lg-5 m-0  align-items-center">



                    <div class="clientes__logos d-flex gap-4 justify-content-around flex-wrap  text-center m-0  p-0">


                        @foreach ($clients as $client)
                            <div class=" clientes__picture  {{ $client->id == $clients->first()->id ? 'clientes__picture--active' : '' }}"
                                data-id="{{ $client->name }}">
                                <img class="clientes__logo " src="{{ $client->image }}" alt="{{ $client->name }}">
                            </div>
                        @endforeach

                        {{-- <div class=" clientes__picture p-3 clientes__picture--active" data-id="content1">
                            <img class="clientes__logo " src="{{ asset('img/clientes/cookie.png') }}"
                                alt="">
                        </div>

                        <div class=" clientes__picture p-3 " data-id="content2">
                            <img class="clientes__logo" src="{{ asset('img/clientes/estrella.png') }}"
                                alt="">
                        </div>


                        <div class=" clientes__picture p-3" data-id="content3">
                            <img class="clientes__logo" src="{{ asset('img/clientes/flecha.png') }}" alt="">
                        </div>

                        <div class=" clientes__picture p-3" data-id="content4">
                            <img class="clientes__logo" src="{{ asset('img/clientes/rec.png') }}" alt="">

                        </div> --}}
                    </div>
                    <img src="{{ asset('img/clientes/flecha.png') }}" class="flecha" alt="">



                    <div class="clientes__content p-0 m-0">

                        @foreach ($clients as $client)
                            <div class="cliente__text {{ $client->id == $clients->first()->id ? 'cliente__text--active' : '' }}"
                                id="{{ $client->name }}">
                                <div class="">
                                    <div class="">
                                        <h3 class="cliente__name m-0">
                                            {{ $client->name }}
                                        </h3>
                                        <p class="clientes__paragraph m-0">
                                            {{ $client->description }}
                                        </p>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="cliente__text  cliente__text--active" id="content1">
                            <div class="">
                                <div class="">
                                    <h3 class="cliente__name m-0">
                                        Galleta
                                    </h3>
                                    <p class="clientes__paragraph m-0">
                                        Ayudamos a las personas y organizaciones a mejorar
                                        sus capacidades y competencias digitales. Lorem
                                        Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took
                                        a galley of type and scrambled it to make a type
                                    </p>
                                </div>

                            </div>
                        </div>


                        <div class="cliente__text" id="content2">
                            <div class="">
                                <div class="">
                                    <h3 class="cliente__name m-0">
                                        Estrella
                                    </h3>
                                    <p class="clientes__paragraph m-0">
                                        Ayudamos a las personas y organizaciones a mejorar
                                        sus capacidades y competencias digitales. Lorem
                                        Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took
                                        a galley of type and scrambled it to make a type
                                    </p>
                                </div>

                            </div>

                        </div>
                        <div class="cliente__text " id="content3">
                            <div class="">
                                <div class="">
                                    <h3 class="cliente__name m-0">
                                        Flecha
                                    </h3>
                                    <p class="clientes__paragraph m-0">
                                        Ayudamos a las personas y organizaciones a mejorar
                                        sus capacidades y competencias digitales. Lorem
                                        Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took
                                        a galley of type and scrambled it to make a type
                                    </p>
                                </div>

                            </div>

                        </div>
                        <div class="cliente__text " id="content4">
                            <div class="">
                                <div class="">
                                    <h3 class="cliente__name m-0">
                                        Punto
                                    </h3>
                                    <p class="clientes__paragraph m-0">
                                        Ayudamos a las personas y organizaciones a mejorar
                                        sus capacidades y competencias digitales. Lorem
                                        Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took
                                        a galley of type and scrambled it to make a type
                                    </p>
                                </div>

                            </div>

                        </div> --}}


                    </div>


                </div>

                <div class="clientes__subtitle d-grid align-content-center pb-5 mb-4">
                    <h3 class="clientes__title title text-secondary display-4 m-0 pb-4">IMPULSA TU NEGOCIO
                        TODOS BUSCAN EN <span class="text-primary">INTERNET</span></h3>
                </div>

            </div>
            <svg class="clientes__wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                preserveAspectRatio="none">
                <path fill="#fff" fill-opacity="1"
                    d="M0,64L205.7,192L411.4,192L617.1,32L822.9,128L1028.6,96L1234.3,160L1440,160L1440,320L1234.3,320L1028.6,320L822.9,320L617.1,320L411.4,320L205.7,320L0,320Z">
                </path>
            </svg>
        </section>

        {{-- Fin CLientes  --}}

        
        <!-- Portafolio -->
        <section class="portafolio position-relative py-2 py-lg-4 ">
            <img src="{{ asset('img/nosotros/iiisometric.svg') }}" class="fondo__port" alt="">
            <div class="portafolio__container container  py-2 py-lg-5 d-grid gap-4">
                <h2 class="title text-secondary">Conoce Nuestro <span class="text-primary">Portafolio</span></h2>

                <div class=" portafolio__cards">


                    @foreach ($portafolios as $portafolio)
                        <div class="card   border-0 shadow-lg px-0 align-content-between">
                            <div class="card__picture">
                                <img src="{{ $portafolio->image }}" class="portafolio__img "
                                    alt="{{ $portafolio->name }}">
                            </div>


                            <div class="d-flex justify-content-center align-items-center h-100 px-3 py-2">
                                <a href="{{ route('portafolios.show', $portafolio) }}"
                                    class="align-self-center portafolio__proyecto align-self-center  text-center h2 text-decoration-none">
                                    {{ $portafolio->name }}</a>
                            </div>



                        </div>
                    @endforeach


                </div>
                <span>
                    <a href="{{ route('portafolios.index') }}" class="btn btn-outline-primary btn__out"> Ver Todos</a>
                </span>


            </div>
        </section>
        <!-- Fin Portafolio -->

        <!-- Comentarios -->
        <section class="comentarios position-relative pt-2 pt-lg-4 ">
            <div class="comentarios__container container   ">
                <h2 class="title text-secondary">Que dicen nuestros <span class="text-primary">Clientes</span></h2>

                <div class="comentarios__content d-flex justify-content-center mt-5">


                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">

                            @foreach ($scores as $score)
                                <div class="swiper-slide ">
                                    <div class="comentario card border-0 p-0 p-md-3">
                                        <div
                                            class="card-header d-flex flex-column flex-lg-row gap-2 align-items-center justify-content-between p-3 bg-white">

                                            <div class="comentario___data d-flex align-items-center gap-2">
                                                <div class="comentario__picture">
                                                    <img src=" {{ $score->image }}" class="comentario__avatar"
                                                        alt="">
                                                </div>
                                                <div class="comentario__info ">
                                                    <h3 class="comentario__author m-0">
                                                        {{ $score->name }}
                                                    </h3>
                                                    <p class="comentario__date m-0">
                                                        {{ $score->created_at->format('d M Y') }}</p>
                                                </div>
                                            </div>

                                            <div class="comentario__calificacion d-flex gap-2 ">
                                                {{-- <h3 class="comentario__rating m-0"> {{$score->calificacion}}.0</h3> --}}
                                                <div class="comentario__stars d-flex gap-1">

                                                    @php
                                                        for ($i = 0; $i < 5; $i++) {
                                                            if ($i < $score->calificacion) {
                                                                echo '<i class=" fa-solid fa-star" style="color:orange;"></i>';
                                                            } else {
                                                                echo '<i class="fa-solid fa-star"></i>';
                                                            }
                                                        }
                                                    @endphp


                                                </div>
                                            </div>


                                        </div>

                                        <div class="card-body pt-3">
                                            <h6 class="comentario__title fs-6 fw-normal p-0"> {{ $score->titulo }}
                                            </h6>
                                            <p class="comentario__paragraph card-text text-muted fs-6">
                                                {{ $score->comment }}
                                            </p>
                                        </div>

                                        <!-- <img src="img/comentarios/comillas.png" class="comentario__comillas" alt=""> -->
                                    </div>
                                </div>
                            @endforeach


                        </div>
                        <div class="swiper-pagination"></div>
                    </div>


                </div>

            </div>
        </section>
        <!-- Fin comentarios -->

        <!-- Instagram -->
        <section class="instagram position-relative  py-2 pb-lg-4 ">
            <div class="instagram__container container py-5 d-grid gap-4">
                <h2 class="title text-secondary">Síguenos en <span class="text-primary">Instagram</span></h2>
                <div class="instagram__content d-flex gap-3 align-items-center">
                    <img class="instagram__logo" src="{{ asset('img/instagram/instagram.png') }}" alt="">
                    <h3 class="instagram__url">@cuanticagroup</h3>
                </div>

                <div class="instagram__posts d-flex flex-wrap justify-content-center gap-3">
                    <!-- LightWidget WIDGET --><iframe
                        src="//lightwidget.com/widgets/8382b020d128520f88711ef0043ee59f.html" scrolling="no"
                        allowtransparency="true" class="lightwidget-widget"
                        style="width:100%;border:0;overflow:hidden;"></iframe>
                </div>

                <span class="d-grid justify-content-center">
                    <a href="#" class="d-flex align-items-center gap-2 btn btn-secondary btn-sm"> <img
                            class="instagram__icon" src="{{ asset('img/instagram/instagram_2.png') }}" alt=""> Siguenos en
                        instagram</a>
                </span>


            </div>
        </section>
        <!-- Fin instagram -->

        <!-- Cookies -->
        <section class="cookies  shadow-lg " id="cookies">
            <div
                class="cookies__container container-fluid px-lg-5 text-secondary d-flex flex-wrap justify-content-center  py-4 align-items-center gap-4">

                <!-- <img src="img/cookies/Cookies.png" class="cookies__img" alt=""> -->
                <div class="cookies__texts d-flex flex-column">
                    <h2 class="cookies__title">
                        We Use Cookies
                    </h2>

                    <p class="cookies__paragraph">
                        This website uses cookies to ensure you get the best experience on our website.
                    </p>

                </div>
                <div class="cookies__buttons d-flex gap-3 ms-lg-auto">
                    <button class="cookies__cta cookies__cta--close">Cookie Policies</button>
                    <button class="cookies__cta" id="cookies__aceptar">Aceptar</button>
                </div>
            </div>
        </section>

        <div class="cookies__fondo " id="cookies__fondo"></div>
        <!-- Fin cookies -->


    </main>

    @push('js')
        <!-- LightWidget WIDGET -->
        <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
        <!-- swiper -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <script>
            // Clientes

            let clientes__picture = document.querySelectorAll('.clientes__picture');
            let cliente__text = document.querySelectorAll('.cliente__text');

            for (let i = 0; i < clientes__picture.length; i++) {
                clientes__picture[i].addEventListener('mouseover', function() {

                    for (let i = 0; i < cliente__text.length; i++) {
                        cliente__text[i].className = 'cliente__text';
                    }

                    document.getElementById(this.dataset.id).className = 'cliente__text--active';

                    for (let i = 0; i < clientes__picture.length; i++) {
                        clientes__picture[i].className = 'clientes__picture';
                    }
                    this.className = 'clientes__picture--active'
                });

            }

            // Fin Clientes
        </script>
        <script>
            // Comentarios
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
                loop: true
            });
            // Fin Comentarios
        </script>
        @if ($services->count() != 0)
            <script>
                // SERVICIOS
                $(document).ready(async function() {


                    $(".services__contenttw").not(".{{ $services[0]->id }}").hide();
                    $(".{{ $services[0]->id }}").addClass("service__item--active");



                    $(".service__item").click(function() {
                        $(this).addClass("service__item--active").siblings().removeClass(
                            "service__item--active");

                        $(".services__contenttwo").fadeOut()
                        setTimeout(function() {
                            $(".services__contenttwo").fadeIn()
                        }, 300)

                        let value = $(this).attr("data-filter")
                        console.log(value);

                        setTimeout(function() {
                            if (value === "{{ $services[0]->id }}") {


                                $(".services__contenttw").not(".example_1").hide()
                                $(".services__contenttw").filter(".{{ $services[0]->id }}").show()
                            } else {

                                $(".services__contenttw").not("." + value).hide();
                                $(".services__contenttw").filter("." + value).show();



                            }
                        }, 300);
                    });



                });
            </script>
        @endif

    @endpush

</x-app-layout>
