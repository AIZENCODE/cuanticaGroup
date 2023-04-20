<x-admin-layout>


    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Nuevo Rol</h2>

        </div>


    </div>



    {!! Form::model($role,['route' => ['admin.roles.update',$role], 'method' => 'put' , 'class' => 'contact__card d-flex flex-column gap-4 rounded-3 shadow-lg bg-white w-100'])!!}

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
                    value="{{ old('name',$role->name) }}">
                <label for="floatingInputGrid">Nombre</label>
            </div>
        </div>

        <div class="">
            <h6 for="" class="form-label">Permisos</h6>
            <div class="d-flex flex-column">
                @foreach ($permissions as $permission)
                <label for="">
                    {!! Form::checkbox('permissions[]', $permission->id, null,['class' => 'form-check-input'])!!}
                    {{$permission->description}}
                </label>
    
                @endforeach
            </div>
        
          
        </div>

        <span class="d-flex gap-2 justify-content-end">
            <button type="button" class="btn btn-outline-danger px-4 py-2" onclick="deleteRole()">Eliminar</button>
            <button type="submit" class="btn btn-outline-primary px-4 py-2">Actualizar Rol</button>
        </span>




        {!! Form::close() !!}

        <form action="{{ route('admin.roles.destroy', $role) }}" method="POST" id="formDeleteRole">
            @csrf
            @method('DELETE')
    
        </form>
        @push('js')
        <script>
     
            function deleteRole() {
                form = document.getElementById('formDeleteRole');

                // Enviar el formulario

                form.submit();
            }

        </script>
    @endpush


</x-admin-layout>