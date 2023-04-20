<x-admin-layout>


    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Informacion de la empresa</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatibus officia repellendus totam
                eos
                nulla quos ullam, necessitatibus maxime suscipit eius expedita iusto eaque neque, dignissimos
                perferendis.
                Aliquam, omnis totam!</p>
        </div>


    </div>




    <form class="contact__card row m-0  rounded-3 shadow-lg bg-white w-100"
        action="{{ route('admin.informacion.update', $informacion) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')


        <div class="mb-5 position-relative">


            <img src="{{ $informacion->image }}" id="imgPreview" class="editpost__img " alt="">

            <div class="position-absolute  mt-5 me-5 top-0 end-0">

                <label class=" form__img d-flex gap-2 items-center bg-white rounded-3 px-4 py-2" for="image">

                    <i class="fa-solid fa-camera align-self-center"></i>
                    Actualizar imagen
                    <input type="file" accept="image/*" name="image" id="image"
                        onchange="previewImage(event, '#imgPreview')" hidden>
                </label>

            </div>

        </div>

        <div class="col-12 col-lg-6 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre"
                    value="{{ old('name', $informacion->name) }}">
                <label for="floatingInputGrid">Nombre de la empresa</label>
            </div>
        </div>

        <div class="col-12 col-lg-6 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" name="razon_social" id="razon_social" placeholder="Cargo"
                    value="{{ old('razon_social', $informacion->razon_social) }}">
                <label for="floatingInputGrid">Razon Social</label>
            </div>
        </div>
        <div class="col-12  mb-3">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Ingresa un resumen " id="description" name="description"
                    style="height: 100px">{{ old('description', $informacion->description) }}</textarea>
                <label for="floatingTextarea2">Descripcion</label>
            </div>
        </div>


        <div class="col-12 col-lg-6 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion"
                    value="{{ old('direccion', $informacion->direccion) }}">
                <label for="floatingInputGrid">Direccion</label>
            </div>
        </div>

        <div class="col-12 col-lg-6 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo"
                    value="{{ old('correo', $informacion->correo) }}">
                <label for="floatingInputGrid">Correo</label>
            </div>
        </div>

        <div class="col-12  mb-3">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Ingresa la mision " id="quienes_somos" name="quienes_somos"
                    style="height: 100px">{{ old('quienes_somos', $informacion->quienes_somos) }}</textarea>
                <label for="floatingTextarea2">Quienes Somos</label>
            </div>
        </div>

        <div class="col-12  mb-3">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Ingresa quienes somos " id="mision" name="mision" style="height: 100px">{{ old('mision', $informacion->mision) }}</textarea>
                <label for="floatingTextarea2">Mision</label>
            </div>
        </div>

        <div class="col-12  mb-3">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Ingresa los valores " id="valores" name="valores" style="height: 100px">{{ old('valores', $informacion->valores) }}</textarea>
                <label for="floatingTextarea2">Valores</label>
            </div>
        </div>

        <div class="col-12  mb-3">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Ingresa el proposito " id="proposito" name="proposito"
                    style="height: 100px">{{ old('proposito', $informacion->proposito) }}</textarea>
                <label for="floatingTextarea2">Proposito</label>
            </div>
        </div>


        <div class="col-12 col-lg-6 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" name="telefono_uno" id="telefono_uno"
                    placeholder="Telefono" value="{{ old('telefono_uno', $informacion->telefono_uno) }}">
                <label for="floatingInputGrid">Telefono</label>
            </div>
        </div>

        <div class="col-12 col-lg-6 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" name="telefono_dos" id="telefono_dos"
                    placeholder="Telefono" value="{{ old('telefono_dos', $informacion->telefono_dos) }}">
                <label for="floatingInputGrid">Otro telefono </label>
            </div>
        </div>


        <div class="col-12">
            <h5 class="fw-bold text-primary">Redes Sociales</h5>
            <div class="row m-0">

                <div class="col-12 col-lg-4 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="facebook" id="facebook"
                            placeholder="Facebook" value="{{ old('facebook', $informacion->facebook) }}">
                        <label for="floatingInputGrid">Facebook</label>
                    </div>
                </div>


                <div class="col-12 col-lg-4 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="instagram" id="instagram"
                            placeholder="Instagram" value="{{ old('instagram', $informacion->instagram) }}">
                        <label for="floatingInputGrid">Instagram</label>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="linkedin" id="linkedin"
                            placeholder="Linkedin" value="{{ old('linkedin', $informacion->linkedin) }}">
                        <label for="floatingInputGrid">Linkedin</label>
                    </div>
                </div>

                <div class="col-12 col-lg-4 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="twitter" id="twitter"
                            placeholder="Twitter" value="{{ old('twitter', $informacion->twitter) }}">
                        <label for="floatingInputGrid">Twitter</label>
                    </div>
                </div>

                <div class="col-12 col-lg-4 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="youtube" id="youtube"
                            placeholder="Youtube" value="{{ old('youtube', $informacion->youtube) }}">
                        <label for="floatingInputGrid">Youtube</label>
                    </div>
                </div>

            </div>
        </div>
        @can('admin.informacion.edit')
            <span class="d-flex flex-wrap gap-2 justify-content-end">
                <button type="submit" class="btn btn-outline-primary px-4 py-2">Actualizar Datos</button>
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
