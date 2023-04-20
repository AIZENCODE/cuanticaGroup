<x-admin-layout>




    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Nuevo Servicio</h2>

        </div>


    </div>


    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data"
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

        <div class="mb-5 position-relative">


            <img src="{{ asset('img/iconos.jpg') }}" id="icoPreview" class="editpost__img " alt="">

            <div class="position-absolute  mt-5 me-5 top-0 end-0">

                <label class=" form__img d-flex gap-2 items-center bg-white rounded-3 px-4 py-2" for="ico">

                    <i class="fa-solid fa-camera align-self-center"></i>
                    Actualizar Icono
                    <input type="file" accept="image/*" name="ico" id="ico"
                        onchange="previewImage(event, '#icoPreview')" hidden>
                </label>

            </div>

        </div>

        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre"
                    value="{{ old('name') }}" onkeyup="string_to_slug()">
                <label for="floatingInputGrid">Titulo</label>
            </div>
        </div>

        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="slug" id="slug" placeholder="Titulo"
                    value="{{ old('slug') }}">
                <label for="floatingInputGrid">Slug</label>
            </div>
        </div>


        <div class="form-floating">
            <textarea class="form-control" placeholder="Ingresa un resumen " id="description" name="description"
                style="height: 100px">{{ old('description') }}</textarea>
            <label for="floatingTextarea2">Descripcion</label>
        </div>

        <div class="">
            <label for="" class="form-label">Contenido</label>
            <textarea name="content" id="editor" class="form-control">
            {{ old('content') }}
        </textarea>
        </div>


        @can('admin.services.create')
            <span class="d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-primary px-4 py-2">Crear Servicio</button>
            </span>
        @endcan





    </form>



    @push('js')
        <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
        <script>
            function string_to_slug() {

                title = document.getElementById("name").value;
                title = title.replace(/^\s+|\s+$/g, '');
                title = title.toLowerCase();
                var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
                var to = "aaaaeeeeiiiioooouuuunc------";
                for (var i = 0, l = from.length; i < l; i++) {
                    title = title.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
                }
                title = title.replace(/[^a-z0-9 -]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');

                document.getElementById('slug').value = title;

            }

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


            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endpush



</x-admin-layout>
