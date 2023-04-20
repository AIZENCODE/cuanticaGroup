<x-app-layout>

    <!-- Contacto -->

    <section class="contact position-relative d-grid justify-content-center align-content-center py-2 py-lg-5">
        <div class="contacbg"></div>
        <div class="contact__container container py-5  py-lg-5 m-0  justify-content-center align-content-center gap-5 ">

            <div class="contact__content d-grid gap-5 align-content-around w-100">

                <div class="contact__texts d-flex flex-column gap-3 text-white">
                    <h6 class="fw-bold">
                        CONTÁCTENOS</h6>
                    <h1 class="fw-bold">
                        Hablemos de su problema.</h1>
                </div>

                <div class="contact__info ">

                    <div class="contact__item d-flex gap-2 w-100">
                        <img src="img/contact/pin.png" class="contact__icon" alt="">
                        <div class="contact__text d-flex flex-column gap-3 w-100">
                            <h7 class="fw-bold">
                                Nuestra Ubicación</h7>
                            <p class="contact__paragraph">{{ $enterprise->direccion }}</p>
                        </div>
                    </div>
                    <div class="contact__item d-flex gap-2 w-100">
                        <img src="img/contact/corre.png" class="contact__icon" alt="">
                        <div class="contact__text d-flex flex-column gap-3 w-100">
                            <h7 class="fw-bold">
                                ¿Cómo podemos ayudar?</h7>
                            <div class="d-flex flex-column gap-1">
                                <p class="contact__paragraph  m-0    ">{{ $enterprise->correo }}</p>
                                {{-- <p class="contact__paragraph   m-0  ">contact@yourdomain.com</p> --}}
                            </div>

                        </div>
                    </div>

                </div>


            </div>


            <form action="{{ route('contacts.store') }}" method="POST"
                class="contact__card d-flex flex-column gap-1  rounded-3 shadow-lg bg-white w-100">

                @if (session('info'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong>{{ session('info') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @csrf
                <h2 class="fw-bold mb-3">Envíanos un mensaje</h2>

                @if ($errors->any())
                    <div class="">

                        <div class="">
                            <p class="text-danger fw-bold">Vaya, algo salió mal</p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    </div>

                @endif
                <div class="d-flex flex-column gap-5">
                    <div class="">
                        <label for="nombre" class="form-label">Nombres*</label>
                        <input type="text" name="nombre" value="{{ old('nombre') }}"
                            class="form-control border-0 border-bottom rounded-0" id="exampleFormControlInput1"
                            placeholder="Juan Martin">
                    </div>

                    <div class="">
                        <label for="correo" class="form-label">Correo*</label>
                        <input type="email" name="correo" value="{{ old('correo') }}"
                            class="form-control border-0 border-bottom rounded-0" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>

                    <div class="">
                        <label for="telefono" class="form-label">Telefono*</label>
                        <input type="text" name="telefono" value="{{ old('telefono') }}"
                            class="form-control border-0 border-bottom rounded-0" id="exampleFormControlInput1"
                            placeholder="+885 1254 5211 552">
                    </div>

                    <div class="">
                        <label for="mensaje" class="form-label">Mensaje*</label>
                        <textarea name="mensaje" value="{{ old('mensaje') }}" class="form-control border-0 border-bottom rounded-0"
                            id="exampleFormControlTextarea1" rows="3" placeholder="Escribe tu mensaje aquí"></textarea>

                    </div>

                    <span>
                        <button type="submit" class="btn btn-outline-primary btn__out px-4 py-2">Enviar</button>
                    </span>
                </div>


            </form>



        </div>
    </section>

    <!-- Fin Contacto -->


</x-app-layout>
