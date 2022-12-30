<x-admin-layout>

    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Nuevo Articulo</h2>

        </div>


    </div>


    <form action="{{ route('admin.posts.store') }}" method="POST"
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

        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="title" id="title" placeholder="Titulo"
                    value="{{ old('title') }}" onkeyup="string_to_slug()">
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



        <div class="col-md">
            <div class="form-floating">
                <select class="form-select" name="category_id" id="category">

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                    @endforeach

                </select>
                <label for="floatingSelectGrid">Categorias</label>
            </div>
        </div>


        <span class="d-flex justify-content-end">
            <button type="submit" class="btn btn-outline-primary px-4 py-2">Crear Post</button>
        </span>




    </form>





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
    </script>




</x-admin-layout>
