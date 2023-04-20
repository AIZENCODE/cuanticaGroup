<x-admin-layout>


    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Nuevo Integrante del Equipo</h2>

        </div>


    </div>



    <form action="{{ route('admin.equipo.store') }}" method="POST" enctype="multipart/form-data"
        class="contact__card d-flex flex-column gap-4 rounded-3 shadow-lg bg-white w-100">

        @csrf

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


            <img src="{{ asset('img/imagen.jpg') }}" id="imgPreview" class="editpost__img " alt="">

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
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre"
                    value="{{ old('name') }}" onkeyup="string_to_slug()">
                <label for="floatingInputGrid">Personal</label>
            </div>
        </div>

        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Cargo"
                    value="{{ old('cargo') }}" onkeyup="string_to_slug()">
                <label for="floatingInputGrid">Cargo</label>
            </div>
        </div>

        <div class="form-floating">
            <textarea class="form-control" placeholder="Ingresa un resumen " id="frase" name="frase" style="height: 100px">{{ old('frase') }}</textarea>
            <label for="floatingTextarea2">Frase</label>
        </div>

        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook"
                    value="{{ old('facebook') }}">
                <label for="floatingInputGrid">Facebook</label>
            </div>
        </div>


        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram"
                    value="{{ old('instagram') }}">
                <label for="floatingInputGrid">Instagram</label>
            </div>
        </div>


        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Linkedin"
                    value="{{ old('linkedin') }}">
                <label for="floatingInputGrid">Linkedin</label>
            </div>
        </div>



        @can('admin.equipo.create')
            <span class="d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-primary px-4 py-2">Crear Persona</button>
            </span>
        @endcan





    </form>


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
        </script>
    @endpush


</x-admin-layout>
