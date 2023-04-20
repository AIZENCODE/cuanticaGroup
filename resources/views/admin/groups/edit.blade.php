<x-admin-layout>


    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Nuevo Integrante del Equipo</h2>

        </div>


    </div>




    <form class="contact__card d-flex flex-column gap-4 rounded-3 shadow-lg bg-white w-100"
        action="{{ route('admin.equipo.update', $equipo) }}" method="POST" enctype="multipart/form-data">

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


            <img src="{{ $equipo->image }}" id="imgPreview" class="editpost__img " alt="{{ $equipo->name }}">

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
                    value="{{ old('name', $equipo->name) }}" onkeyup="string_to_slug()">
                <label for="floatingInputGrid">Personal</label>
            </div>
        </div>

        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Cargo"
                    value="{{ old('cargo', $equipo->cargo) }}" onkeyup="string_to_slug()">
                <label for="floatingInputGrid">Cargo</label>
            </div>
        </div>

        <div class="form-floating">
            <textarea class="form-control" placeholder="Ingresa un resumen " id="frase" name="frase" style="height: 100px">{{ old('frase', $equipo->frase) }}</textarea>
            <label for="floatingTextarea2">Frase</label>
        </div>

        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook"
                    value="{{ old('facebook', $equipo->facebook) }}">
                <label for="floatingInputGrid">Facebook</label>
            </div>
        </div>


        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram"
                    value="{{ old('instagram', $equipo->instagram) }}">
                <label for="floatingInputGrid">Instagram</label>
            </div>
        </div>


        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Linkedin"
                    value="{{ old('linkedin', $equipo->linkedin) }}">
                <label for="floatingInputGrid">Linkedin</label>
            </div>
        </div>

        <div class="">

            <input type="hidden" value="0" name="status">
            <div class="form-check form-switch">
                <input class="form-check-input" name="status" value="1" @checked(old('status', $equipo->status) == 1)
                    type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">¿Quieres activar a la persona?</label>
            </div>

        </div>

        <span class="d-flex gap-2 justify-content-end">
            @can('admin.equipo.destroy')
                <button type="button" class="btn btn-outline-danger px-4 py-2" onclick="deletePost()">Eliminar</button>
            @endcan
            @can('admin.equipo.edit')
                <button type="submit" class="btn btn-outline-primary px-4 py-2">Actualizar </button>
            @endcan

        </span>




    </form>


    @can('admin.equipo.destroy')
        <form action="{{ route('admin.equipo.destroy', $equipo) }}" method="POST" id="formDeletePost">
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

            function deletePost() {
                form = document.getElementById('formDeletePost');

                // Enviar el formulario

                form.submit();
            }
        </script>
    @endpush


</x-admin-layout>
