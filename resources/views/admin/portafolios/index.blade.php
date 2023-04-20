<x-admin-layout>


    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Portafolio</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatibus officia repellendus totam
                eos
                nulla quos ullam, necessitatibus maxime suscipit eius expedita iusto eaque neque, dignissimos
                perferendis.
                Aliquam, omnis totam!</p>
        </div>


    </div>
    <div class="p-2 p-lg-4 shadow-sm mb-5">
        @can('admin.portafolios.create')
            <div class="d-flex justify-content-start my-3">
                <a href="{{ route('admin.portafolios.create') }}" class="btn btn-success">Nuevo</a>
            </div>
        @endcan


        <table id="example"class="table table-striped dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    @can('admin.portafolios.edit')
                    <th class="">Accion</th>
                    @endcan
                </tr>
            </thead>
            <tbody>


                @foreach ($portafolios as $portafolio)
                    <tr class="">
                        <th>{{ $portafolio->id }}</th>
                        <td>{{ $portafolio->name }}</td>
                        <td>{{ $portafolio->created_at }}</td>
                        @can('admin.portafolios.edit')
                            <td class="text-center">
                                <a href="{{ route('admin.portafolios.edit', $portafolio) }}"
                                    class="btn btn-primary text-white"><i class="fa-regular fa-pen-to-square"></i></a>
                            </td>
                        @endcan


                    </tr>
                @endforeach




            </tbody>

        </table>
    </div>



</x-admin-layout>
