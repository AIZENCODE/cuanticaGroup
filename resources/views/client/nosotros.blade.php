<x-app-layout>

    <!-- Nosotros -->

    <section class="nosotros  position-relative  py-2 py-lg-5">
        <div class="nosotros__container container py-2 py-lg-5 d-grid gap-4">

            <div class="nosotros__content row m-0 row-cols-1 row-cols-lg-2  justify-content-around align-items-center">

                <img class="nosotros__img py-3" src="img/nosotros/undraw_innovative_re_rr5i (1).svg" alt="">

                <div class="nosotros__texts py-3">
                    <h2 class="nosotros__title">CUANTICA GROUP S.A.C.</h2>
                    <p class="nosotros__paragraph mb-4">Somos un equipo de personas latinoamericanas de
                        Chile, Bolivia, Perú y Colombia entusiastas,
                        apasionados por los negocios y las tecnologías que
                        ponemos a disposición nuestros conocimientos y</p>

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

                <div class="nosotros__texts order-2 order-lg-1 py-3">


                    <div class="nosotros__items">
                        <div class="nosotros__item d-flex gap-3">

                            <img class="punto" src="img/nosotros/rec (1).png" alt="">
                            <div class="">
                                <h3 class="nosotros__subtitle nosotros__subtitle--blue">NUESTRA MISIÓN</h3>
                                <p class="nosotros__paragraph">Somos un equipo de personas que ofrecemos
                                    productos, servicios y soluciones en tecnologías
                                    de información y comunicación a organizaciones
                                    privadas y públicas para la mejora de las
                                    capacidades y competencias tecnológicas de los
                                    usuarios, de sus procesos y de su cultura
                                    organizacional.
                                </p>
                            </div>

                        </div>
                        <div class="nosotros__item d-flex gap-3">

                            <img class="punto" src="img/nosotros/rec (1).png" alt="">
                            <div class="">
                                <h3 class="nosotros__subtitle nosotros__subtitle--blue">NUESTROS VALORES</h3>
                                <p class="nosotros__paragraph">La innovación, la ética y el alto cumplimiento de
                                    nuestros acuerdos. Ejercemos Responsabilidad
                                    Social en los ámbitos y sectores donde
                                    intervenimos como parte de nuestra
                                    contribución para el desarrollo de una sociedad
                                    digital.
                                </p>
                            </div>

                        </div>
                        <div class="nosotros__item d-flex gap-3">

                            <img class="punto" src="img/nosotros/rec (1).png" alt="">
                            <div class="">
                                <h3 class="nosotros__subtitle nosotros__subtitle--blue">NUESTRO PROPÓSITO
                                </h3>
                                <p class="nosotros__paragraph">Ayudamos a organizaciones públicas y privadas a
                                    mejorar sus capacidades y competencias
                                    tecnológicas de sus usuarios, de sus procesos
                                    operativos y la de su cultura organizacional.
                                </p>
                            </div>

                        </div>


                    </div>

                </div>
                <img class="nosotros__img order-1 order-lg-2 py-3" src="img/nosotros/undraw_annotation_re_h774.svg"
                    alt="">
            </div>


        </div>

        <svg class="nosotros__wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
            preserveAspectRatio="none">
            <path fill="#78C4C3" fill-opacity="1"
                d="M0,160L240,224L480,160L720,192L960,32L1200,224L1440,128L1440,320L1200,320L960,320L720,320L480,320L240,320L0,320Z">
            </path>
        </svg>




    </section>

    <!-- Fin Nosotros -->


    <!-- Equipo -->
    <section class="equipo position-relative py-2 py-lg-5">
        <div class="equipo__container container  py-2 py-lg-5 d-grid gap-4">
            <h2 class="title text-secondary pb-5 mb-5">Nuestro <span class="text-primary">Equipo</span></h2>



            <div class="row m-0 row-cols-3 row-cols-lg-2 row-cols-md-1 gap-5 mt-5 justify-content-around">
                @foreach ($groups as $group)
                    <div class="card border-0 position-relative shadow-sm my-5"
                        style="min-width:18rem;max-width: 20rem;">
                        <img src="img/avatar/img4.jpg" class="equipo__avatar shadow-sm" alt="">
                        <div class="card-body text-center pt-5 mt-3">
                            <h5 class="card-title">{{$group->name }}</h5>
                            <h6 class="card-subtitle mb-3 text-muted">{{$group->cargo }}</h6>
                            <p class="card-text">{{$group->frase }}</p>
                        </div>
                    </div>
                @endforeach



            </div>

        </div>
    </section>

    <!-- Fin equipo -->



</x-app-layout>
