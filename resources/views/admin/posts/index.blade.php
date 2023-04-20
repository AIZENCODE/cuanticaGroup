<x-admin-layout>

    <div class=" d-flex justify-content-between pb-2">
        <div class="">
            <h2 class="dashboard__title">Blog</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatibus officia repellendus totam
                eos
                nulla quos ullam, necessitatibus maxime suscipit eius expedita iusto eaque neque, dignissimos
                perferendis.
                Aliquam, omnis totam!</p>
        </div>


    </div>


    <div class="blogdos__container container py-2 py-lg-5 d-grid gap-4">
        @can('admin.posts.create')
            <div class="d-flex justify-content-end">
                <a href="{{ route('admin.posts.create') }}" class="btn btn-success">Nuevo</a>
            </div>
        @endcan


        <div class="blogdos__cards d-grid gap-5">


            @if (sizeof($posts) == 0)
                <h2 class="text-muted text-center fw-bold">No se tiene posts escritos</h2>
            @else
                @foreach ($posts as $post)
                    <div class="blogdos__card py-5 border-bottom">
                        <div class="">
                            <div class="blogdos__picture ">
                                <img src="{{ $post->image }}" class="blogdos__img" alt="">
                            </div>
                        </div>


                        <div class="blogdos__content d-flex gap-2 flex-column  flex-fill">


                            <div class="">
                                <h3 class="blog__cardtitle p-0 m-0">{{ $post->title }}</h3>

                                <span @class([
                                    'd-inline-flex fs-6 fw-normal my-2 px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2' =>
                                        $post->is_published,
                                    'd-inline-flex fs-6 fw-normal my-2 px-2 py-1 fw-semibold text-info bg-info bg-opacity-10 border border-info border-opacity-10 rounded-2' => !$post->is_published,
                                ])>

                                    {{ $post->is_published ? 'Publicado' : 'Sin Publicar' }}

                                </span>
                            </div>


                            <p class="blog__cardparagraph">
                                {{ Str::limit($post->summary, 100) }}
                            </p>
                            @can('admin.posts.edit')
                                <span>
                                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-outline-primary"> Editar
                                    </a>
                                </span>
                            @endcan


                        </div>
                    </div>
                @endforeach
            @endif






        </div>
        {{ $posts->links() }}
    </div>


</x-admin-layout>
