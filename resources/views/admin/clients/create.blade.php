<x-admin-layout>


    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Nuevo Cliente</h2>

        </div>


    </div>



    <form action="{{ route('admin.clientes.store') }}" method="POST" enctype="multipart/form-data"
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
                <input type="text" class="form-control" name="name" id="name" placeholder="Titulo"
                    value="{{ old('name') }}" onkeyup="string_to_slug()">
                <label for="floatingInputGrid">Usuario</label>
            </div>
        </div>

        <div class="form-floating">
            <textarea class="form-control" placeholder="Ingresa un resumen " id="description" name="description"
                style="height: 100px">{{ old('description') }}</textarea>
            <label for="floatingTextarea2">Descripcion</label>
        </div>



        @can('admin.clientes.create')
            <span class="d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-primary px-4 py-2">Crear Cliente</button>
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
