<x-admin-layout>


    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Actualizar Puntaje</h2>

        </div>


    </div>



    <form class="contact__card d-flex flex-column gap-4 rounded-3 shadow-lg bg-white w-100"
        action="{{ route('admin.opiniones.update', $opinione) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')
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

        <div class="mb-5 position-relative">


            <img src="{{ $opinione->image }}" id="imgPreview" class="editpost__img " alt="{{ $opinione->name }}">

            <div class="position-absolute  mt-5 me-5 top-0 end-0">

                <label class=" form__img d-flex gap-2 items-center bg-white rounded-3 px-4 py-2" for="image">

                    <i class="fa-solid fa-camera align-self-center"></i>
                    Actualizar imagen
                    <input type="file" accept="image/*" name="image" id="image"
                        onchange="previewImage(event, '#imgPreview')" hidden>
                </label>

            </div>

        </div>


        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="name" id="name" placeholder="Titulo"
                    value="{{ old('name', $opinione->name) }}">
                <label for="floatingInputGrid">Usuario</label>
            </div>
        </div>

        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo"
                    value="{{ old('titulo', $opinione->titulo) }}">
                <label for="floatingInputGrid">Titulo</label>
            </div>
        </div>


        <div class="form-floating">
            <textarea class="form-control" placeholder="Ingresa un resumen del Articulo" id="comment" name="comment"
                style="height: 100px">{{ old('comment', $opinione->comment) }}</textarea>
            <label for="floatingTextarea2">Comentario</label>
        </div>

        <div class="col-md ">
            <label class="form-label">
                Puntaje
            </label>

            <div class="d-flex gap-3">

                @for ($i = 1; $i < 6; $i++)
                    @if ($i < $opinione->calificacion)
                        <div class="form-check p-0">
                            <input class="form-check-input input " type="radio" value="{{ $i }}"
                                name="calificacion" id="{{ $i }}flexRadioDefault"
                                @checked($opinione->calificacion == $i)>
                            <label class="form-check-label fs-4 start--active" style="cursor: pointer;"
                                onclick="calificar(this)" id="{{ $i }}calificacion"
                                for="{{ $i }}flexRadioDefault">
                                <i class="fa-solid fa-star"></i>
                            </label>
                        </div>
                        @if ($i == $opinione->calificacion)
                            <div class="form-check p-0">
                                <input class="form-check-input input" type="radio" value="{{ $i }}"
                                    name="calificacion" id="{{ $i }}flexRadioDefault"
                                    @checked($opinione->calificacion == $i)>
                                <label class="form-check-label fs-4" style="cursor: pointer;" onclick="calificar(this)"
                                    id="{{ $i }}calificacion" for="{{ $i }}flexRadioDefault">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                            </div>
                        @endif
                    @else
                        <div class="form-check p-0">
                            <input class="form-check-input input " type="radio" value="{{ $i }}"
                                name="calificacion" id="{{ $i }}flexRadioDefault"
                                @checked($opinione->calificacion == $i)>
                            <label class="form-check-label fs-4" style="cursor: pointer;" onclick="calificar(this)"
                                id="{{ $i }}calificacion" for="{{ $i }}flexRadioDefault">
                                <i class="fa-solid fa-star"></i>
                            </label>
                        </div>
                    @endif


                @endfor


            </div>

        </div>

        <div class="">

            <input type="hidden" value="0" name="status">
            <div class="form-check form-switch">
                <input class="form-check-input" name="status" value="1" @checked(old('status', $opinione->status) == 1)
                    type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">¿Quieres Publicar la opinion?</label>
            </div>





            <span class="d-flex gap-2 justify-content-end">
                @can('admin.apiniones.destroy')
                    <button type="button" class="btn btn-outline-danger px-4 py-2"
                        onclick="deleteScore()">Eliminar</button>
                @endcan
                @can('admin.apiniones.edit')
                    <button type="submit" class="btn btn-outline-primary px-4 py-2">Actualizar </button>
                @endcan

            </span>




    </form>



    @can('admin.opiniones.destroy')
        <form action="{{ route('admin.opiniones.destroy', $opinione) }}" method="POST" id="formDeleteScore">
            @csrf
            @method('DELETE')

        </form>
    @endcan



    @push('js')
        <script>
            function previewImage(event, querySelector) {

                //Recuperamos el input que desencadeno la acción
                const input = event.target;

                //Recuperamos la etiqueta img donde cargaremos la imagen
                $imgPreview = document.querySelector(querySelector);

                // Verificamos si existe una imagen seleccionada
                if (!input.files.length) return

                //Recuperamos el archivo subido
                file = input.files[0];

                //Creamos la url
                objectURL = URL.createObjectURL(file);

                //Modificamos el atributo src de la etiqueta img
                $imgPreview.src = objectURL;

            }

            let contador;

            function calificar(item) {
                // console.log(item);
                contador = item.id[0]; //capturando el primer caracter
                let nombre = item.id.substring(1); //4 'calificacion' captura todo menos el primer caracter
                for (let i = 0; i < 5; i++) {

                    if (i < contador) {

                        document.getElementById((i + 1) + nombre).classList.add('start--active');

                    } else {
                        document.getElementById((i + 1) + nombre).classList.remove('start--active');
                    }

                }
            }

            function deleteScore() {
                form = document.getElementById('formDeleteScore');

                // Enviar el formulario

                form.submit();
            }
        </script>
    @endpush


</x-admin-layout>
