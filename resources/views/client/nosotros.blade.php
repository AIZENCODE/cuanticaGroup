<x-app-layout>



    <header>
        <div class="header__main  header__main--orange position-relative d-grid align-content-end ">
            <div class="header__container container  ">
                <div
                    class="row  gap-5 gap-sm-5 gap-xl-0 justify-content-between align-items-end header__contenido pt-5 py-xl-0">
                    <div class="col-12 col-xl-5 header__texts align-self-center  ">
                        <h1 class="header__title text-secondary display-1">
                            Sobre <span class="text-primary d-block">Nosotros</span>
                        </h1>
                        <p class="header__paragraph">
                            Ayudamos a las personas y organizaciones a mejorar sus
                            capacidades y competencias digitales.

                        </p>

                        <a href="#" class="btn btn-primary text-white">Conocenos</a>
                    </div>


                    <div class="col-12 col-xl-7 header__picture justify-content-center align-self-start ">


                        <img src="{{ asset('img/nosotros/nosotros.png') }}" alt=""
                            class="header__img header__img--person   img-fluid">


                    </div>

                </div>

            </div>
            <div class="circle__1 circle__1--orange"></div>
            <div class="circle__2"></div>
            <div class="circle__3 circle__3--orange"></div>

        </div>

    </header>



    <!-- Nosotros -->

    <section class="nosotros  position-relative  py-2 py-lg-4">
        {{-- <img src="{{ asset('img/nosotros/patternpad.svg') }}" class="fondo__nosotros" alt=""> --}}

        <div class="nosotros__container container py-2 py-lg-5 d-grid gap-4">

            <div class="nosotros__content row m-0 row-cols-1 row-cols-lg-2  justify-content-around align-items-center">

                <img class="nosotros__img py-3" src="img/nosotros/undraw_innovative_re_rr5i (1).svg" alt="">

                <div class="nosotros__texts py-3">
                    <h2 class="nosotros__title">CUANTICA GROUP S.A.C.</h2>
                    <p class="nosotros__paragraph mb-4">{{ $enterprise->description }}</p>

                    <div class="nosotros__items">
                        <div class="nosotros__item d-flex gap-3">

                            <img class="punto" src="img/nosotros/rec.png" alt="">
                            <div class="">
                                <h3 class="nosotros__subtitle">INNOVACIÓN</h3>
                                <p class="nosotros__paragraph">Nos adaptamos a escenarios con resiliencia y
                                    creatividad. Creamos soluciones sostenibles,
                                    rentables y viables a tus modelos de negocios.
                                </p>
                            </div>

                        </div>
                        <div class="nosotros__item d-flex gap-3">

                            <img class="punto" src="img/nosotros/rec.png" alt="">
                            <div class="">
                                <h3 class="nosotros__subtitle">AGILIDAD Y PREDICTIVIDAD</h3>
                                <p class="nosotros__paragraph">Aplicamos el marco Agile y el enfoque de
                                    proyectos predictivos en todos nuestros
                                </p>
                            </div>

                        </div>
                        <div class="nosotros__item d-flex gap-3">

                            <img class="punto" src="img/nosotros/rec.png" alt="">
                            <div class="">
                                <h3 class="nosotros__subtitle">TECNOLOGÍA</h3>
                                <p class="nosotros__paragraph">Aplicamos tecnología en cada uno de nuestros
                                    modelos de trabajo.
                                </p>
                            </div>

                        </div>


                    </div>

                </div>

                <div class="nosotros__texts order-2 order-lg-1 pt-3">


                    <div class="nosotros__items">
                        <div class="nosotros__item d-flex gap-3">

                            <img class="punto" src="img/nosotros/rec (1).png" alt="">
                            <div class="">
                                <h3 class="nosotros__subtitle nosotros__subtitle--blue">NUESTRA MISIÓN</h3>
                                <p class="nosotros__paragraph">{{ $enterprise->mision }}
                                </p>
                            </div>

                        </div>
                        <div class="nosotros__item d-flex gap-3">

                            <img class="punto" src="img/nosotros/rec (1).png" alt="">
                            <div class="">
                                <h3 class="nosotros__subtitle nosotros__subtitle--blue">NUESTROS VALORES</h3>
                                <p class="nosotros__paragraph">{{ $enterprise->valores }}
                                </p>
                            </div>

                        </div>
                        <div class="nosotros__item d-flex gap-3">

                            <img class="punto" src="img/nosotros/rec (1).png" alt="">
                            <div class="">
                                <h3 class="nosotros__subtitle nosotros__subtitle--blue">NUESTRO PROPÓSITO
                                </h3>
                                <p class="nosotros__paragraph">{{ $enterprise->proposito }}
                                </p>
                            </div>

                        </div>


                    </div>

                </div>
                <img class="nosotros__img order-1 order-lg-2 pt-3" src="img/nosotros/undraw_annotation_re_h774.svg"
                    alt="">
            </div>


        </div>

        {{-- <svg class="nosotros__wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
            preserveAspectRatio="none">
            <path fill="#78C4C3" fill-opacity="1"
                d="M0,160L240,224L480,160L720,192L960,32L1200,224L1440,128L1440,320L1200,320L960,320L720,320L480,320L240,320L0,320Z">
            </path>
        </svg> --}}




    </section>

    <!-- Fin Nosotros -->


    <!-- Equipo -->
    <section class="equipo position-relative py-2 py-lg-5 overflow-hidden">
        <img src="{{ asset('img/nosotros/blob.svg') }}" class="blob" alt="">
        <img src="{{ asset('img/nosotros/blob.svg') }}" class=" blob--amarillo" alt="">
        <div class="equipo__container container  py-2 py-lg-5 d-grid gap-4">
            <h2 class="title text-secondary  mb-5">Nuestro <span class="text-primary">Equipo</span></h2>



            <div class="row m-0 row-cols-3 row-cols-lg-2 row-cols-md-1 gap-5 justify-content-around">

                @foreach ($groups as $group)
                    <div class="card card__equipo border-0 shadow-sm p-4 position-relative "
                        style="min-width:18rem;max-width: 20rem;">
                        <img src="{{ asset('img/nosotros/bbblurry.svg') }}" class="blob" alt="">

                        <div class="fondo__card"></div>
                        <img src="{{ $group->image }}" class="equipo__avatar rounded-circle shadow-sm" alt="">
                        <div class="card-body text-center ">
                            <h5 class="card-title ">{{ $group->name }}</h5>
                            <h6 class="card-subtitle mb-3 text-muted fs-6">{{ $group->cargo }}</h6>
                            <p class="card-text fw-light">{{ $group->frase }}</p>
                        </div>
                        <div class="d-flex justify-content-center gap-5 mt-3">
                            <a href="{{ $group->facebook }}" class="social__link" target="_blank"><i
                                    class="fa fa-facebook fw-bolder  fs-5"></i></a>

                            <a href="{{ $group->instagram }}" class="social__link" target="_blank"><i
                                    class="fa fa-instagram fw-bolder  fs-5"></i></a>

                            <a href="{{ $group->linkedin }}" class="social__link" target="_blank"><i
                                    class="fa fa-linkedin  fw-bolder  fs-5"></i></a>

                        </div>
                    </div>
                @endforeach



            </div>

        </div>
    </section>

    <!-- Fin equipo -->



</x-app-layout>
