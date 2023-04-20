<x-admin-layout>


    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Categorias</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatibus officia repellendus totam
                eos
                nulla quos ullam, necessitatibus maxime suscipit eius expedita iusto eaque neque, dignissimos
                perferendis.
                Aliquam, omnis totam!</p>
        </div>


    </div>
    <div class="p-2 p-lg-4 shadow-sm mb-5">
        @can('admin.categories.create')
            <div class="d-flex justify-content-start my-3">
                <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Nuevo</a>
            </div>
        @endcan


        <table id="example"class="table table-striped dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">id</th>
                    <th class="text-center">Nombre</th>
                    @can('admin.categories.edit')
                        <th  class="text-center">
                            Accion
                        </th>
                    @endcan

                </tr>
            </thead>
            <tbody>


                @foreach ($categories as $category)
                    <tr class="">
                        <td class="text-center">{{ $category->id }}</td>
                        <td class="text-center">{{ $category->name }}</td>
                        @can('admin.categories.edit')
                            <td class="text-center">

                                <a href="{{ route('admin.categories.edit', $category) }}"
                                    class="btn btn-primary text-white"><i class="fa-regular fa-pen-to-square"></i></a>
                            </td>
                        @endcan
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>

</x-admin-layout>
