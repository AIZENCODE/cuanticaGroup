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
    <!-- services -->

    <section class="servic position-relative justify-content-center align-content-center py-2 py-lg-5">


        <div class="servic_container container ">

            <form action="">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border-0 border-bottom" id="floatingInput" placeholder="Buscar">
                    <label for="floatingInput">Buscar</label>
                  </div>
            </form>


            <div class="blog__cardsall my-5">


                @if ($services->count() !=0)
                    @foreach ($services as $service)
                        <div
                            class="services__card d-flex flex-column  p-0 position-relative  rounded-3 overflow-hidden">


                            <img src="{{ $service->image }}" class="blog__img2" alt="{{ $service->name }}">
                          
                            <div class=" d-grid align-content-between gap-3 w-100 h-100 py-3 px-4 ">
                                
                                
                                    <h2 class="blog__cardtitle m-0 text-center">
                                        {{ $service->name }}
                                    </h2>
                                    

                               
                                <p class="blog__cardparagraph text-muted m-0">{{ $service->description }}</p>
                                <span class="d-flex justify-content-center ">
                                    <a href="{{ route('services.show',$service) }}" class="btn btn-outline-secondary rounded-pill py-2 px-4">Ver detalles</a>
                                </span>
                                
                            </div>
                           

                        </div>
                    @endforeach
                @else
                    <p>No se han encontrado articulos relacionados</p>
                @endif








            </div>
            
            <div class="mt-5">
                {{ $services->appends(['search' => request('search'), 'category' => request('category'), 'tags' => request('tags')])->links() }}
            </div>


        </div>



    </section>

    <!-- Fin Contacto -->


</x-app-layout>
