<x-admin-layout>


    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Usuarios</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatibus officia repellendus totam
                eos
                nulla quos ullam, necessitatibus maxime suscipit eius expedita iusto eaque neque, dignissimos
                perferendis.
                Aliquam, omnis totam!</p>
        </div>


    </div>
    <div class="p-2 p-lg-4 shadow-sm mb-5">
        <div class="d-flex justify-content-start my-3">
            {{-- <a href="{{ route('admin.usuarios.create') }}" class="btn btn-success">Nuevo</a> --}}
        </div>

        <table id="example"class="table table-striped dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">id</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Email</th>
                    
                    @can('admin.usuarios.edit')
                    <th class="text-center">Accion</th>
                    @endcan
                    

                </tr>
            </thead>
            <tbody>


                @foreach ($users as $user)
                    <tr class="">
                        <td class="text-center">{{ $user->id }}</td>
                        <td class="text-center">{{ $user->name }}</td>
                        <td class="text-center">{{ $user->email }}</td>
                      
                        @can('admin.usuarios.edit')
                        <td class="text-center">
                            <a href="{{ route('admin.usuarios.edit', $user) }}"
                                class="btn btn-primary text-white"><i class="fa-regular fa-pen-to-square"></i></a>


                        </td>
                        @endcan
                        

                    </tr>
                @endforeach




            </tbody>

        </table>
    </div>

</x-admin-layout>
