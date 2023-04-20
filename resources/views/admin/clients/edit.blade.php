<x-admin-layout>


    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Editar Cliente</h2>

        </div>


    </div>



    <form class="contact__card d-flex flex-column gap-4 rounded-3 shadow-lg bg-white w-100"
        action="{{ route('admin.clientes.update', $cliente) }}" method="POST" enctype="multipart/form-data">

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


            <img src=" {{ $cliente->image }}" id="imgPreview" class="editpost__img " alt="{{ $cliente->name }}">

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
                    value="{{ old('name', $cliente->name) }}" onkeyup="string_to_slug()">
                <label for="floatingInputGrid">Usuario</label>
            </div>
        </div>


        <div class="form-floating">
            <textarea class="form-control" placeholder="Ingresa un resumen " id="description" name="description"
                style="height: 100px">{{ old('description', $cliente->description) }}</textarea>
            <label for="floatingTextarea2">Descripcion</label>
        </div>


        <span class="d-flex flex-wrap gap-2 justify-content-end">
            @can('admin.clientes.destroy')
                <button type="button" class="btn btn-outline-danger px-4 py-2" onclick="deleteCliente()">Eliminar</button>
            @endcan
            @can('admin.clientes.edit')
                <button type="submit" class="btn btn-outline-primary px-4 py-2">Actualizar Post</button>
            @endcan

        </span>

       
    </form>

    @can('admin.clientes.destroy')
        <form action="{{ route('admin.clientes.destroy', $cliente) }}" method="POST" id="formDeleteCliente">
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

            function deleteCliente() {
                form = document.getElementById('formDeleteCliente');

                // Enviar el formulario

                form.submit();
            }
        </script>
    @endpush


</x-admin-layout>
