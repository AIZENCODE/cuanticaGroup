<x-app-layout>

    <header>
        <div class="header__main  header__main--orange position-relative d-grid align-content-end ">
            <div class="header__container container  ">
                <div
                    class="row  gap-5 gap-sm-5 gap-xl-0 justify-content-between align-items-end header__contenido py-5 py-xl-0">
                    <div class="col-12 col-xl-5 header__texts align-self-center  order-2 order-xl-1">
                        <h1 class="header__title text-secondary display-1 ">
                            Nuestros
                            <span class="text-primary d-block">Servicios</span>
                        </h1>
                        <p class="header__paragraph">
                            Hacemos de tus necesidades, deseos y problemas nuestra
                            prioridad de trabajo.

                        </p>

                        <a href="#" class="btn btn-primary text-white">Conocenos</a>
                    </div>


                    <div class="col-12 col-xl-7 header__picture justify-content-center align-self-start order-1 order-xl-2">


                        <img src="{{ asset('img/servicios/banner.png') }}" alt=""
                            class="header__img header__img--cel   img-fluid">


                    </div>

                </div>

            </div>
            <div class="circle__1 circle__1--orange"></div>
            <div class="circle__2"></div>
            <div class="circle__3 circle__3--orange"></div>

        </div>

    </header>
    @livewire('client.services-index' )

</x-app-layout>
