<div>
    <!-- services -->

    <section class="servic position-relative justify-content-center align-content-center py-2 py-lg-5">


        <div class="servic_container container ">

           
            <div class="form-floating mb-3">
                <input wire:model="search" type="text" class="form-control border-0 border-bottom" id="floatingInput"
                    placeholder="Buscar">
                <label for="floatingInput">Buscar</label>
            </div>

            @if ($portafolios->count())
            <div class=" portafolio__cards">


                @foreach ($portafolios as $portafolio)
                    <div class="card   border-0 shadow-lg px-0 align-content-between">
                        <div class="card__picture">
                            <img src="{{ $portafolio->image }}" class="portafolio__img " alt="{{ $portafolio->name }}">
                        </div>


                        <div class="d-flex justify-content-center align-items-center h-100 px-3 py-2">
                            <h2 class="align-self-center portafolio__proyecto align-self-center  text-center">
                                {{ $portafolio->name }}</h2>
                        </div>


                    </div>
                @endforeach


            </div>

            <div class="mt-5">
                {{ $portafolios->links() }}
            </div>

           
                
            @else
            
            <strong class="py-5 my-4 d-block "> No hay registros relacionados</strong>
           
            @endif

         

        </div>



    </section>

    <!-- Fin Contacto -->
</div>
