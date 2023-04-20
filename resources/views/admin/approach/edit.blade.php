<x-admin-layout>


    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Nuevo Articulo</h2>

        </div>


    </div>

    <form class="contact__card d-flex flex-column gap-4 rounded-3 shadow-lg bg-white w-100" enctype="multipart/form-data"
        action="{{ route('admin.enfoques.update', $enfoque) }}" method="POST">

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


            <img src="{{ $enfoque->image }}" id="imagePreview" class="editpost__img " alt="{{ $enfoque->name }}">

            <div class="position-absolute  mt-5 me-5 top-0 end-0">

                <label class=" form__img d-flex gap-2 items-center bg-white rounded-3 px-4 py-2" for="image">

                    <i class="fa-solid fa-camera align-self-center"></i>
                    Actualizar Icono
                    <input type="file" accept="image/*" name="image" id="image"
                        onchange="previewImage(event, '#imagePreview')" hidden>
                </label>

            </div>

        </div>


        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="name" id="name" placeholder="Titulo"
                    value="{{ old('name', $enfoque->name) }}" onkeyup="string_to_slug()">
                <label for="floatingInputGrid">Nombre</label>
            </div>
        </div>


        <div class="col-md">
            <h5 class="fw-bold">Colores Recomendados</h5>
            <div class="d-flex flex-wrap gap-3">
                <div class="d-flex flex-column justify-content-center align-content-center gap-2">
                    <div class="color__recomendados align-self-center" style="--i:#FF9C00">

                    </div>
                    <p class="p-0 m-0">#FF9C00</p>
                </div>

                <div class="d-flex flex-column justify-content-center align-content-center gap-2">
                    <div class="color__recomendados align-self-center" style="--i:#FFE791">

                    </div>
                    <p class="p-0 m-0">#FFE791</p>
                </div>

                <div class="d-flex flex-column justify-content-center align-content-center gap-2">
                    <div class="color__recomendados align-self-center" style="--i:#768070">

                    </div>
                    <p class="p-0 m-0">#768070</p>
                </div>

                <div class="d-flex flex-column justify-content-center align-content-center gap-2">
                    <div class="color__recomendados align-self-center" style="--i:#1C3146">

                    </div>
                    <p class="p-0 m-0">#1C3146</p>
                </div>

                <div class="d-flex flex-column justify-content-center align-content-center gap-2">
                    <div class="color__recomendados align-self-center" style="--i:#78C4C3">

                    </div>
                    <p class="p-0 m-0">#78C4C3</p>
                </div>

            </div>

        </div>


        <div class="col-md">
            <label for="exampleColorInput" class="form-label">Color</label>
            <input type="color" class="form-control form-control-color" name="color" id="color"
                value="{{ old('color', $enfoque->color) }}" title="Choose your color">
        </div>

        <div class="form-floating">
            <textarea class="form-control" placeholder="Ingresa un resumen " id="description" name="description"
                style="height: 100px">{{ old('description', $enfoque->description) }}</textarea>
            <label for="floatingTextarea2">Descripcion</label>
        </div>


        <span class="d-flex gap-2 justify-content-end">
            @can('admin.enfoques.destroy')
                <button type="button" class="btn btn-outline-danger px-4 py-2" onclick="deleteEnfoque()">Eliminar</button>
            @endcan

            @can('admin.enfoques.edit')
                <button type="submit" class="btn btn-outline-primary px-4 py-2">Actualizar Enfoques</button>
            @endcan

        </span>


    </form>


    @can('admin.enfoques.destroy')
        <form action="{{ route('admin.enfoques.destroy', $enfoque) }}" method="POST" id="formDeleteEnfoque">
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

            function deleteEnfoque() {
                form = document.getElementById('formDeleteEnfoque');

                // Enviar el formulario

                form.submit();
            }
        </script>
    @endpush

</x-admin-layout>
