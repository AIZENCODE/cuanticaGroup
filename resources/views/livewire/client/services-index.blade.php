<div>
    <!-- services -->

    <section class="servic position-relative justify-content-center align-content-center py-3 py-lg-5">


        <div class="servic_container container ">

            <div class="form-floating mb-3">
                <input wire:model="search" type="text" class="form-control border-0 border-bottom" id="floatingInput"
                    placeholder="Buscar">
                <label for="floatingInput">Buscar</label>
            </div>

            <div class="blog__cardsall my-5">


                @if ($services->count() != 0)
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
                                    <a href="{{ route('services.show', $service) }}"
                                        class="btn btn-outline-secondary rounded-pill py-2 px-4">Ver detalles</a>
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

</div>
