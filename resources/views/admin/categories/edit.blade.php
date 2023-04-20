<x-admin-layout>



    <form class="contact__card d-flex flex-column gap-4 rounded-3 shadow-lg bg-white w-100"
        action="{{ route('admin.categories.update', $category) }}" method="POST" enctype="multipart/form-data">

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

        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre"
                    value="{{ old('name', $category->name) }}" onkeyup="string_to_slug()">
                <label for="floatingInputGrid">Nombre</label>
            </div>
        </div>


        <div class="col-md">

            <span class="d-flex gap-2 justify-content-end">
                @can('admin.categories.destroy')
                    <button type="button" class="btn btn-outline-danger px-4 py-2" onclick="deleteCategory()"
                        @disabled($category->posts->count() != 0)>Eliminar</button>
                @endcan

                @can('admin.categories.edit')
                    <button type="submit" class="btn btn-outline-primary px-4 py-2">Actulizar Categoria</button>
                @endcan

            </span>
        </div>
    </form>

    @can('admin.categories.destroy')
        @if ($category->posts->count() == 0)
            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" id="formDeleteCategory">
                @csrf
                @method('DELETE')

            </form>
        @endif
    @endcan



    @push('js')
        <script>
            function deleteCategory() {
                form = document.getElementById('formDeleteCategory');

                // Enviar el formulario

                form.submit();
            }
        </script>
    @endpush


</x-admin-layout>
