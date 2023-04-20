<x-admin-layout>




    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Actualizar Servicio</h2>

        </div>


    </div>


    <form class="contact__card d-flex flex-column gap-4 rounded-3 shadow-lg bg-white w-100"
        action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">

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


            <img src="{{ $service->image }}" id="imgPreview" class="editpost__img " alt="{{ $service->name }}">

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


            <img src="{{ $service->ico }}" id="icoPreview" class="editpost__img " alt="{{ $service->name }}">

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
                    value="{{ old('name', $service->name) }}" onkeyup="string_to_slug()">
                <label for="floatingInputGrid">Titulo</label>
            </div>
        </div>

        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="slug" id="slug" placeholder="Titulo"
                    value="{{ old('slug', $service->slug) }}">
                <label for="floatingInputGrid">Slug</label>
            </div>
        </div>


        <div class="form-floating">
            <textarea class="form-control" placeholder="Ingresa un resumen " id="description" name="description"
                style="height: 100px">{{ old('description', $service->description) }}</textarea>
            <label for="floatingTextarea2">Descripcion</label>
        </div>

        <div class="">
            <label for="" class="form-label">Contenido</label>
            <textarea name="content" id="editor" class="form-control">
                {{ old('content', $service->content) }}
        </textarea>
        </div>

        <div class="">

            <input type="hidden" value="0" name="status">
            <div class="form-check form-switch">
                <input class="form-check-input" name="status" value="1" @checked(old('status', $service->status) == 1)
                    type="checkbox" role="switch" id="status">
                <label class="form-check-label" for="status">¿Quieres activar el Servicio?</label>
            </div>

        </div>


        <div class="">

            <input type="hidden" value="0" name="outstanding">
            <div class="form-check form-switch">
                <input class="form-check-input" name="outstanding" value="1" @checked(old('outstanding', $service->outstanding) == 1)
                    type="checkbox" role="switch" id="outstanding">
                <label class="form-check-label" for="outstanding">¿Quieres agregar a destacados?</label>
            </div>

        </div>


        <span class="d-flex gap-2 justify-content-end">
            @can('admin.services.destroy')
                <button type="button" class="btn btn-outline-danger px-4 py-2" onclick="deleteService()">Eliminar</button>
            @endcan

            @can('admin.services.edit')
                <button type="submit" class="btn btn-outline-primary px-4 py-2">Actualizar Servicio</button>
            @endcan

        </span>




    </form>
    @can('admin.services.destroy')
        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" id="formDeleteService">
            @csrf
            @method('DELETE')

        </form>
    @endcan






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

            function deleteService() {
                form = document.getElementById('formDeleteService');

                // Enviar el formulario

                form.submit();
            }
        </script>
    @endpush



</x-admin-layout>
