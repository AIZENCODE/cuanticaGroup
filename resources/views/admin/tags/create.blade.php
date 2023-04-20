<x-admin-layout>


    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Nueva Etiqueta</h2>

        </div>


    </div>


    <form action="{{ route('admin.etiquetas.store') }}" method="POST"
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
                <input type="text" class="form-control" name="name" id="name" placeholder="Titulo"
                    value="{{ old('name') }}" onkeyup="string_to_slug()">
                <label for="floatingInputGrid">Nombre</label>
            </div>
        </div>


        @can('admin.etiquetas.create')
            <span class="d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-primary px-4 py-2">Crear Etiqueta</button>
            </span>
        @endcan



    </form>




</x-admin-layout>
