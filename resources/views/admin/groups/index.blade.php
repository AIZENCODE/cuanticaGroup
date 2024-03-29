<x-admin-layout>


    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Equipo</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatibus officia repellendus totam
                eos
                nulla quos ullam, necessitatibus maxime suscipit eius expedita iusto eaque neque, dignissimos
                perferendis.
                Aliquam, omnis totam!</p>
        </div>


    </div>
    <div class="p-2 p-lg-4 shadow-sm mb-5">
        @can('admin.equipo.create')
            <div class="d-flex justify-content-start my-3">
                <a href="{{ route('admin.equipo.create') }}" class="btn btn-success">Nuevo</a>
            </div>
        @endcan
        <table id="example"class="table table-striped dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">id</th>
                    <th class="text-center">Nombre</th>

                    @can('admin.equipo.edit')
                        <th class="text-center">Accion</th>
                    @endcan


                </tr>
            </thead>
            <tbody>


                @foreach ($groups as $group)
                    <tr class="">
                        <td class="text-center">{{ $group->id }}</td>
                        <td class="text-center">{{ $group->name }}</td>

                        @can('admin.equipo.edit')
                            <td class="text-center">
                                <a href="{{ route('admin.equipo.edit', $group) }}" class="btn btn-primary text-white"><i
                                        class="fa-regular fa-pen-to-square"></i></a>
                            </td>
                        @endcan


                    </tr>
                @endforeach




            </tbody>

        </table>
    </div>

</x-admin-layout>
