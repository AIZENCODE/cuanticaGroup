<x-admin-layout>


    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Actualizar Usuario</h2>

        </div>


    </div>

    {!! Form::model($usuario, [
        'route' => ['admin.usuarios.update', $usuario],
        'method' => 'put',
        'class' => 'contact__card d-flex flex-column gap-4 rounded-3 shadow-lg bg-white w-100',
    ]) !!}

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
                value="{{ old('name', $usuario->name) }}" onkeyup="string_to_slug()">
            <label for="floatingInputGrid">Nombre</label>
        </div>
    </div>


    <div class="">
        <h6 for="" class="form-label">Roles</h6>
        <div class="d-flex flex-column">
            @foreach ($roles as $role)
                <label for="">
                    {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'form-check-input']) !!}
                    {{ $role->name }}
                </label>
            @endforeach
        </div>

    </div>

    <div class="col-md">

        @can('admin.usuarios.edit')
            <span class="d-flex gap-2 justify-content-end">
                <button type="submit" class="btn btn-outline-primary px-4 py-2">Actulizar Usuario</button>
            </span>
        @endcan
    </div>

    {!! Form::close() !!}


</x-admin-layout>
