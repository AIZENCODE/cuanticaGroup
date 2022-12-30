<x-app-layout>
    <header>
        <div class="header__main position-relative d-grid align-content-center ">
            <div class="header__container container  ">
                <div
                    class="row row-cols-1 row-cols-xl-2 gap-2 gap-sm-5 gap-xl-0 align-items-center header__contenido py-5">
                    <div class="col header__texts order-2 order-xl-1">
                        <h1 class="header__title text-secondary display-1">
                            Soluciones <span class="text-primary d-block">Digitales</span>
                        </h1>
                        <p class="header__paragraph">
                            Ayudamos a las personas y organizaciones a mejorar sus
                            capacidades y competencias digitales. Lorem Ipsum has
                            been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book.
                        </p>

                        <a href="#" class="btn btn-primary text-white">Conocenos</a>
                    </div>


                    <div class="col header__picture justify-content-center d-grid align-self-center order-xl-2">



                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="5000">
                                    <img src="img/R.png" alt="" class="header__img img-fluid">
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="img/crea-tu-sitio-web-gratis.png" alt=""
                                        class="header__img img-fluid">
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="img/paginas-web.png" alt="" class="header__img img-fluid">
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
        <section class="informacion  position-relative py-2 py-lg-5">
            <div class="informacion__container container my-5 py-2 py-lg-5 d-grid gap-4">
                <h2 class="title text-secondary">Lorem Ipsum has been the <span class="text-primary">industry's</span>
                </h2>

                <div class="pasatiempos d-flex flex-wrap gap-4 text-center position-relative justify-content-center">

                    <div class="pasatiempo__item" style="--i:#FFE791">
                        <div class="pasatiempo__icon">
                            <p></p>
                            <img src="img/informacion/coding.png" class="pasatiempo__img" alt="">
                        </div>
                        <div class="pasatiempo__content">
                            <h2 class="pasatiempo__title">Pensamos</h2>
                            <p class="pasatiempo__paragraph">INNOVACION Y
                                TRANSFORMACION DIGITAL
                                ENFOCADO EN LAS
                                PERSONAS</p>
                        </div>
                    </div>

                    <div class="pasatiempo__item" style="--i:#1C3146">
                        <div class="pasatiempo__icon">
                            <p></p>
                            <img src="img/informacion/estadisticas.png" class="pasatiempo__img" alt="">
                        </div>
                        <div class="pasatiempo__content">
                            <h2 class="pasatiempo__title">Design</h2>
                            <p class="pasatiempo__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Assumenda
                                facilis labore commodi laboriosam nobis esse!</p>
                        </div>
                    </div>

                    <div class="pasatiempo__item" style="--i:#78C4C3">
                        <div class="pasatiempo__icon">
                            <p></p>
                            <img src="img/informacion/sombrero-de-graduacion.png" class="pasatiempo__img"
                                alt="">
                        </div>
                        <div class="pasatiempo__content">
                            <h2 class="pasatiempo__title">Design</h2>
                            <p class="pasatiempo__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Assumenda
                                facilis labore commodi laboriosam nobis esse!</p>
                        </div>
                    </div>

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

                <div
                    class="services__contenttwo p-3 rounded-5 shadow-lg position-relative m-0 row row-cols-1 row-cols-lg-2  justify-content-center align-items-center">

                    <div class="services__texts m-0 order-2 order-lg-1 pt-4 pt-lg-0">
                        <h2 class="services__title text-primary ">Desarrollo Profesional de Aplicaciones moviles</h2>

                        <p class="services__paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id
                            fugiat soluta
                            quisquam, velit inventore modi.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id
                            fugiat soluta
                            quisquam, velit inventore modi.</p>
                        <a href="#" class="btn btn-outline-secondary">Mas informacion</a>
                    </div>

                    <img src="img/cards/2.png" class="services__img m-0 order-1 order-lg-2" alt="">

                </div>

                <div class="services__categorias m-0 row row-cols-3 row-cols-lg-1 align-content-center p-0 py-lg-3 ">


                    @foreach ($services as $service)
                        <div
                            class="row m-0 row-cols-2  service__item  text-center justify-content-center align-items-center gap-2 py-2 ">

                            <div class="services__pictureico text-center">
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


        <!-- Clientes -->
        <section class="clientes position-relative  py-2 py-lg-5">

            <div class="clientes__container container my-5  py-2 py-lg-5 d-grid gap-4">
                <h2 class="title text-secondary">Clientes que confían en <span class="text-primary">nosotros</span>
                </h2>
                <div class="row row-cols-1 row-cols-lg-3  justify-content-center  p-lg-5 m-0  align-items-center">

                    <div class="clientes__logos row row-cols-1 row-cols-md-2  text-center m-0  p-0">
                        <div class="col clientes__picture p-3">
                            <img class="clientes__logo" src="img/clientes/Kaita_Logo.png" alt="">
                        </div>
                        <div class="col clientes__picture p-3">
                            <img class="clientes__logo" src="img/clientes/LEGISCORP-5.png" alt="">
                        </div>
                        <div class="col clientes__picture p-3">
                            <img class="clientes__logo" src="img/clientes/OIP.jpg" alt="">
                        </div>
                        <div class="col clientes__picture p-3">
                            <img class="clientes__logo" src="img/clientes/Kaita_Logo.png" alt="">
                        </div>
                    </div>
                    <img src="img/clientes/circulo-de-flecha.png" class="flecha" alt="">
                    <div class="clientes__content d-grid gap-2 pt-5  pt-lg-0">
                        <h3 class="cliente__name m-0">
                            Kaita
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

                <div class="clientes__subtitle d-grid align-content-center py-5">
                    <h3 class="clientes__title title text-secondary display-4 m-0 py-5">IMPULSA TU NEGOCIO
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
        <!-- Fin clientes -->

        <!-- Portafolio -->
        <section class="portafolio position-relative py-2 py-lg-5 ">
            <div class="portafolio__container container  py-2 py-lg-5 d-grid gap-4">
                <h2 class="title text-secondary">Conoce Nuestro <span class="text-primary">Portafolio</span></h2>

                <div
                    class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 justify-content-around gap-3 mb-2 mb-lg-5 portafolio__cards m-0">


                    @foreach ($portafolios as $portafolio)
                        <div class="card portafolio__card border-0 shadow-lg px-0 align-content-between">
                            <div class="card__picture">
                                <img src="{{ $portafolio->image }}" class="portafolio__img "
                                    alt="{{ $portafolio->name }}">
                            </div>


                            <div class="d-flex justify-content-center align-items-center h-100 px-3 py-2">
                                <h2 class="align-self-center portafolio__proyecto align-self-center  text-center">
                                    {{ $portafolio->name }}</h2>
                            </div>


                        </div>
                    @endforeach


                </div>
                <span>
                    <a href="{{ route('portafolios.index') }}" class="btn btn-outline-primary"> Ver Todos</a>
                </span>


            </div>
        </section>
        <!-- Fin Portafolio -->

        <!-- Comentarios -->
        <section class="comentarios position-relative py-2 py-lg-5 ">
            <div class="comentarios__container container   ">
                <h2 class="title text-secondary">Que dicen nuestros <span class="text-primary">Clientes</span></h2>

                <div class="comentarios__content d-flex justify-content-center mt-5 mt-lg-5">


                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide ">
                                <div class="comentario card border-0 p-0 p-md-3">
                                    <div
                                        class="card-header d-flex flex-column flex-lg-row gap-2 align-items-center justify-content-between p-3 bg-white">

                                        <div class="comentario___data d-flex align-items-center gap-2">
                                            <div class="comentario__picture">
                                                <img src="img/avatar/img4.jpg" class="comentario__avatar"
                                                    alt="">
                                            </div>
                                            <div class="comentario__info ">
                                                <h3 class="comentario__author m-0">
                                                    Ana Saravia
                                                </h3>
                                                <p class="comentario__date m-0">25, Nov 2025</p>
                                            </div>
                                        </div>

                                        <div class="comentario__calificacion d-flex gap-2 ">
                                            <h3 class="comentario__rating m-0">Rating: 5.0</h3>
                                            <div class="comentario__stars d-flex gap-1">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="card-body pt-4">
                                        <h5 class="comentario__title">I Really Love This Product!</h5>
                                        <p class="comentario__paragraph card-text">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit.
                                        </p>
                                    </div>

                                    <!-- <img src="img/comentarios/comillas.png" class="comentario__comillas" alt=""> -->
                                </div>
                            </div>

                            <div class="swiper-slide ">
                                <div class="comentario card border-0 p-0 p-md-3">
                                    <div
                                        class="card-header d-flex flex-column flex-lg-row gap-2 align-items-center justify-content-between p-3 bg-white">

                                        <div class="comentario___data d-flex align-items-center gap-2">
                                            <div class="comentario__picture">
                                                <img src="img/avatar/img4.jpg" class="comentario__avatar"
                                                    alt="">
                                            </div>
                                            <div class="comentario__info ">
                                                <h3 class="comentario__author m-0">
                                                    Ana Saravia
                                                </h3>
                                                <p class="comentario__date m-0">25, Nov 2025</p>
                                            </div>
                                        </div>

                                        <div class="comentario__calificacion d-flex gap-2 ">
                                            <h3 class="comentario__rating m-0">Rating: 5.0</h3>
                                            <div class="comentario__stars d-flex gap-1">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="card-body pt-4">
                                        <h5 class="comentario__title">I Really Love This Product!</h5>
                                        <p class="comentario__paragraph card-text">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit.
                                            Maecenas ac risus a risus elementum vehicula. Class aptent taciti sociosqu
                                            ad litora torquent per
                                            conubia nostra, per inceptos himenaeos. Aenean tristique nisl nec fermentum
                                            eleifend. Fusce
                                            tincidunt,Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo
                                            commodi a, voluptates consequuntur assumenda quibusdam accusamus dicta
                                            rerum, eveniet voluptatibus facilis repudiandae praesentium beatae
                                            laudantium fuga nam quam exercitationem consequatur!
                                            tortor a elementum vehicula,
                                            magna ligula iaculis lacus, vel feugiat velit felis a metus.</p>
                                    </div>

                                    <!-- <img src="img/comentarios/comillas.png" class="comentario__comillas" alt=""> -->
                                </div>
                            </div>

                            <div class="swiper-slide ">
                                <div class="comentario card border-0 p-0 p-md-3">
                                    <div
                                        class="card-header d-flex flex-column flex-lg-row gap-2 align-items-center justify-content-between p-3 bg-white">

                                        <div class="comentario___data d-flex align-items-center gap-2">
                                            <div class="comentario__picture">
                                                <img src="img/avatar/img4.jpg" class="comentario__avatar"
                                                    alt="">
                                            </div>
                                            <div class="comentario__info ">
                                                <h3 class="comentario__author m-0">
                                                    Ana Saravia
                                                </h3>
                                                <p class="comentario__date m-0">25, Nov 2025</p>
                                            </div>
                                        </div>

                                        <div class="comentario__calificacion d-flex gap-2 ">
                                            <h3 class="comentario__rating m-0">Rating: 5.0</h3>
                                            <div class="comentario__stars d-flex gap-1">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="card-body pt-4">
                                        <h5 class="comentario__title">I Really Love This Product!</h5>
                                        <p class="comentario__paragraph card-text">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit.
                                            Maecenas ac risus a risus elementum vehicula. Class aptent taciti sociosqu
                                            ad litora torquent per
                                            conubia nostra, per inceptos himenaeos. Aenean tristique nisl nec fermentum
                                            eleifend. Fusce
                                            tincidunt,
                                            tortor a elementum vehicula,
                                            magna ligula iaculis lacus, vel feugiat velit felis a metus.</p>
                                    </div>

                                    <!-- <img src="img/comentarios/comillas.png" class="comentario__comillas" alt=""> -->
                                </div>
                            </div>

                            <div class="swiper-slide ">
                                <div class="comentario card border-0 p-0 p-md-3">
                                    <div
                                        class="card-header d-flex flex-column flex-lg-row gap-2 align-items-center justify-content-between p-3 bg-white">

                                        <div class="comentario___data d-flex align-items-center gap-2">
                                            <div class="comentario__picture">
                                                <img src="img/avatar/img4.jpg" class="comentario__avatar"
                                                    alt="">
                                            </div>
                                            <div class="comentario__info ">
                                                <h3 class="comentario__author m-0">
                                                    Ana Saravia
                                                </h3>
                                                <p class="comentario__date m-0">25, Nov 2025</p>
                                            </div>
                                        </div>

                                        <div class="comentario__calificacion d-flex gap-2 ">
                                            <h3 class="comentario__rating m-0">Rating: 5.0</h3>
                                            <div class="comentario__stars d-flex gap-1">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                                <img src="img/comentarios/estrella.png" alt=""
                                                    class="star d-block">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="card-body pt-4">
                                        <h5 class="comentario__title">I Really Love This Product!</h5>
                                        <p class="comentario__paragraph card-text">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit.
                                            Maecenas ac risus a risus elementum vehicula. Class aptent taciti sociosqu
                                            ad litora torquent per
                                            conubia nostra, per inceptos himenaeos. Aenean tristique nisl nec fermentum
                                            eleifend. Fusce
                                            tincidunt,
                                            tortor a elementum vehicula,
                                            magna ligula iaculis lacus, vel feugiat velit felis a metus.</p>
                                    </div>

                                    <!-- <img src="img/comentarios/comillas.png" class="comentario__comillas" alt=""> -->
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>


                </div>

            </div>
        </section>
        <!-- Fin comentarios -->

        <!-- Instagram -->
        <section class="instagram position-relative  py-2 py-lg-5 ">
            <div class="instagram__container container py-5 d-grid gap-4">
                <h2 class="title text-secondary">Síguenos en <span class="text-primary">Instagram</span></h2>
                <div class="instagram__content d-flex gap-3 align-items-center">
                    <img class="instagram__logo" src="img/instagram/instagram (1).png" alt="">
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
                            class="instagram__icon" src="img/instagram/instagram (2).png" alt=""> Siguenos en
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



</x-app-layout>
