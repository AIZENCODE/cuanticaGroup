<x-app-layout>

  
    <header>
        <div class="header__main  header__main--orange position-relative d-grid align-content-end ">
            <div class="header__container container  ">
                <div class="row  gap-5 gap-sm-5 gap-xl-0 justify-content-between align-items-end header__contenido pt-5 py-xl-0">
                    <div class="col-12 col-xl-5 header__texts align-self-center  ">
                        <h1 class="header__title text-secondary display-1">
                            Nuestro  <span class="text-primary d-block">Portafolio</span>
                        </h1>
                        <p class="header__paragraph">
                            Conoce la calidad de nuestros trabajos

                        </p>

                        {{-- <a href="#" class="btn btn-primary text-white">Conocenos</a> --}}
                    </div>


                    <div
                        class="col-12 col-xl-7 header__picture justify-content-center align-self-start ">


                        <img src="{{ asset('img/portafolio/portafolio.png') }}" alt=""
                            class="header__img header__img--person   img-fluid">


                    </div>

                </div>

            </div>
            <div class="circle__1 circle__1--orange"></div>
            <div class="circle__2"></div>
            <div class="circle__3 circle__3--orange"></div>

        </div>

    </header>

 
    @livewire('client.portafolios-index' )

</x-app-layout>
