<x-admin-layout>


    <div class="d-flex justify-content-end">
        <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Nuevo</a>
    </div>
    
    <!--MDB Tables-->
    <div class=" mt-4">
        <div class="card border-0 shadow-lg p-3">
            <div class="card-body">
                <!--Table-->
                <table class="table overflow-hidden">
                    <!--Table head-->
                    <thead class="mdb-color bg-dark">
                        <tr class="text-white">
                            <th>id</th>
                            <th>Nombre</th>
                            <th class=""></th>

                        </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>


                        @foreach ($categories as $category)

                        <tr class="">
                            <th>{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            <td class="d-flex justify-content-end gap-2"> 
                                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-info">Editar</a> 

                
                            </td>

                        </tr>

                            
                        @endforeach
                       

                    </tbody>
                    <!--Table body-->
                </table>
                <!--Table-->
            </div>
        </div>

    </div>
    <!--MDB Tables-->









</x-admin-layout>
