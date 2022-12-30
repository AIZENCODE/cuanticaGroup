<x-admin-layout>

    @push('css')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endpush

    <form class="w-100 d-flex flex-column" action="{{ route('admin.posts.update', $post) }}" method="POST"
        enctype="multipart/form-data">

        @csrf
        @method('PUT')

       
         <div class="mb-5 position-relative">

        
                <img src=" {{ $post->image }}"  id="imgPreview" class="editpost__img " alt="{{ $post->title }}">
            
            <div class="position-absolute  mt-5 me-5 top-0 end-0">

                <label class=" form__img d-flex gap-2 items-center bg-white rounded-3 px-4 py-2" for="image">

                    <i class="fa-solid fa-camera align-self-center"></i>
                    Actualizar imagen
                    <input type="file" accept="image/*" name="image" id="image"
                        onchange="previewImage(event, '#imgPreview')" hidden>
                </label>

            </div>

        </div> 

        <div class="contact__card d-flex flex-column gap-4 rounded-3 shadow-lg bg-white w-100 mb-5">
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

            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Titulo"
                        value="{{ old('title', $post->title) }}" onkeyup="string_to_slug()">
                    <label for="floatingInputGrid">Titulo</label>
                </div>
            </div>

            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug"
                        value="{{ old('slug', $post->slug) }}">
                    <label for="floatingInputGrid">Slug</label>
                </div>
            </div>

            <div class="col-md">
                <div class="form-floating">
                    <select class="form-select" name="category_id" id="category">

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id', $post->category_id) == $category->id)>{{ $category->name }}
                            </option>
                        @endforeach

                    </select>
                    <label for="floatingSelectGrid">Categorias</label>
                </div>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Ingresa un resumen del Articulo" id="summary" name="summary"
                    style="height: 100px">{{ old('summary', $post->summary) }}</textarea>
                <label for="floatingTextarea2">Comments</label>
            </div>

            <div class="">
                <label for="" class="form-label">Etiquetas</label>
                <select class="js-example-basic-multiple" style="width: 100%;" name="tags[]" multiple="multiple">

                    @foreach ($post->tags as $tag)
                        <option value="{{ $tag->name }}" selected>{{ $tag->name }}</option>
                    @endforeach

                </select>
            </div>

            <div class="">
                <label for="" class="form-label">Contenido</label>
                <textarea name="content" id="editor" class="form-control">
                {{ old('content', $post->content) }}
            </textarea>
            </div>

            <div class="">

                <input type="hidden" value="0" name="is_published">
                <div class="form-check form-switch">
                    <input class="form-check-input" name="is_published" value="1" @checked(old('is_published', $post->is_published) == 1)
                        type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">¿Quieres Publicar el post?</label>
                </div>

            </div>







            <span class="d-flex flex-wrap gap-2 justify-content-end">
                <button type="button" class="btn btn-outline-danger px-4 py-2" onclick="deletePost()">Eliminar</button>
                <button type="submit" class="btn btn-outline-primary px-4 py-2">Actualizar Post</button>
            </span>

        </div>




    </form>

    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" id="formDeletePost">
        @csrf
        @method('DELETE')

    </form>


    @push('js')
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

        <script>
            function string_to_slug() {

                title = document.getElementById("title").value;
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


            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });



            $(document).ready(function() {
                $('.js-example-basic-multiple').select2({
                    tags: true,
                    tokenSeparators: [',', ' '],
                    ajax: {
                        url: "{{ route('tags.select2') }}",
                        dataType: 'json',
                        delay: 250,
                        data: function(params) {
                            return {
                                term: params.term
                            }
                        },
                        processResults: function(data) {
                            return {
                                results: data
                            }
                        }
                    }
                });



            });

            function deletePost() {
                form = document.getElementById('formDeletePost');

                // Enviar el formulario

                form.submit();
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
        </script>
    @endpush

</x-admin-layout>
