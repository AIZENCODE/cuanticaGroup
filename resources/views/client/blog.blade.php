<x-app-layout>

    <!-- blog -->

    <section class="blog position-relative py-2 py-lg-5 ">

        <div class="blog__container container py-2 py-lg-5 d-grid gap-4">

            <div class="blog__texts text-center pb-2 pb-lg-5  d-flex flex-column gap-2">
                <h3 class="blog__text fw-bold fs-6 text-primary">Nuestro Blog</h3>

                <h2 class="fw-semibold display-4">Stories and interviews</h2>
                <p class="fw-light mx-auto">Subscribe to learn about new product features, the latest in technology,
                    solutions, and updates.</p>
                <form class="d-grid gap-2" action="{{ route('blog.index') }}">
                    <div class="d-flex flex-wrap w-100 gap-2 justify-content-center align-items-start">
                        <div class="mb-3 form__content d-flex flex-column justify-content-start">
                            <input class="form-control" type="text" name="search" id="search"
                                value="{{ old('search', request('search')) }}" placeholder="Ingresar Articulo"
                                aria-label=".form-control-lg example">


                            <!-- <div id="emailHelp" class="form-text blog__alert">We care about your data in our privacy policy</div> -->
                        </div>
                        <button class="btn btn-primary text-white">Buscar</button>
                    </div>

                    <div
                        class="categories__list d-flex flex-wrap justify-content-center align-items-center gap-3 mt-4 h-100 py-3 ">

                        @foreach ($categories as $category)
                            <label class="d-block" for="{{ $category->name }}">
                                <input class="input" type="checkbox" name="category[]" id="{{ $category->name }}"
                                    value="{{ $category->id }}" @checked(is_array(request('category')) && in_array($category->id, request('category')))>
                                <span class="category__check ">{{ $category->name }}</span>
                            </label>
                        @endforeach


                    </div>

                </form>

            </div>
            @if (!empty($postsrecent))
                <div class="blog__recent pb-2 pb-lg-5">
                    <h3 class="blog__title mb-4">
                        Articulos Destacados
                    </h3>

                    <div class="blog__cardsreset">



                        @foreach ($postsrecent as $postrecent)
                            <div class="blog__cardreset position-relative align-items-center d-flex gap-3">
                                <img src="{{ $postrecent->image }}" class="blog__img1 " alt="{{ $postrecent->title }}">
                                <a href="#" class="blog__cardcategory text-decoration-none ">
                                    <h6 class="category__name fw-bold text-white m-0">{{ $postrecent->category->name }}
                                    </h6>
                                </a>
                                <div class="blog__contentcard d-flex flex-column gap-3  w-100">
                                    <p class="blog__carddate text-primary fw-bold m-0">
                                        {{ $postrecent->user->name . ' . ' . $postrecent->published_at->format('d M Y') }}
                                    </p>

                                    <div class="d-flex gap-1 justify-content-between w-100 ">
                                        <h2 class="blog__cardtitle m-0 ">
                                            {{ $postrecent->title }}
                                        </h2>
                                        <a href="{{ route('blog.show', $postrecent) }}" class="d-flex ms-auto">
                                            <img src="{{ asset('img/blog/icon.png') }}" class="blog__icon"
                                                alt="">
                                        </a>

                                    </div>

                                    <p class="blog__cardparagraph text-muted m-0"> {{ $postrecent->summary }}</p>
                                    <div class="blog__cardtags d-flex  gap-2">


                                        @foreach ($postrecent->tags as $tag)
                                            <a href="{{ route('blog.index') . '?tag=' . $tag->name }}"
                                                class="blog__cardtag text-decoration-none">
                                                <h6 class="tag__name fw-bold text-primary m-0">{{ $tag->name }}</h6>
                                            </a>
                                        @endforeach


                                    </div>
                                </div>

                            </div>
                        @endforeach




                    </div>


                </div>
            @endif


            <div class="blog__all pb-2 pb-lg-5">

              
                <h3 class="blog__title mb-4">
                    
                    @if (empty(request('category')) && empty(request('search'))  && empty(request('tag')))
                    Todos los Articulos
                    @else
                    Todos los Articulos <span class="text-primary">Relacionados</span> 
                    @endif
                   

                </h3>

                <div class="blog__cardsall ">


                    @if ($postsall->count() !=0)
                        @foreach ($postsall as $postall)
                            <div
                                class="blog__allcard d-flex flex-column gap-3 p-0 position-relative justify-content-start  align-items-center ">


                                <img src="{{ $postall->image }}" class="blog__img2" alt="{{ $postall->title }}">
                                <a href="#" class="blog__cardcategory text-decoration-none ">
                                    <h6 class="category__name fw-bold text-white m-0">
                                        {{ $postall->category->name }}
                                    </h6>
                                </a>
                                <div
                                    class="blog__contentcard d-flex flex-column justify-content-start gap-3 w-100 h-100">
                                    <p class="blog__carddate text-primary fw-bold m-0">
                                        {{ $postall->user->name . ' . ' . $postall->published_at->format('d M Y') }}
                                    </p>
                                    <div class="d-flex gap-1  justify-content-between w-100 ">
                                        <h2 class="blog__cardtitle m-0 ">
                                            {{ $postall->title }}
                                        </h2>
                                        <a href="{{ route('blog.show', $postall) }}" class="d-flex ms-auto">

                                            <img src="{{ asset('img/blog/icon.png') }}" class="blog__icon"
                                                alt="">
                                        </a>

                                    </div>
                                    <p class="blog__cardparagraph text-muted m-0">{{ $postall->summary }}</p>
                                    <div class="blog__cardtags d-flex  gap-2">

                                        @foreach ($postall->tags as $tag)
                                            <a href="{{ route('blog.index') . '?tag=' . $tag->name }}"
                                                class="blog__cardtag text-decoration-none">
                                                <h6 class="tag__name fw-bold text-primary m-0">{{ $tag->name }}
                                                </h6>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    @else
                        <p>No se han encontrado articulos relacionados</p>
                    @endif








                </div>
                
                <div class="mt-5">
                    {{ $postsall->appends(['search' => request('search'), 'category' => request('category'), 'tags' => request('tags')])->links() }}
                </div>
                {{-- <div
                    class="blog__paginate d-grid gap-2 justify-content-center d-sm-flex justify-content-sm-between w-100 p-3 mt-5 border-top">

                    <a href="#"
                        class="text-decoration-none d-flex gap-3 align-items-center justify-content-center text-muted fw-bold">
                        <img src="img/paginacion/flecha-correcta.png" class="pag__flecha pag__flecha--giro"
                            alt=""> Anterior</a>

                    <div class="blog__paginas d-flex gap-2 ">
                        <div class="blog__pagina d-flex justify-content-center align-items-center blog__pagina--active">
                            1
                        </div>
                        <div class="blog__pagina d-flex justify-content-center align-items-center">
                            2
                        </div>
                        <div class="blog__pagina d-flex justify-content-center align-items-center">
                            3
                        </div>
                        <div class="blog__pagina d-flex justify-content-center align-items-center">
                            4
                        </div>
                    </div>


                    <a href="#"
                        class="text-decoration-none d-flex gap-3 align-items-center justify-content-center text-muted fw-bold">
                        Siguiente <img src="img/paginacion/flecha-correcta.png" class="pag__flecha" alt=""></a>

                </div> --}}



            </div>



        </div>

    </section>

    <!-- fin blog -->


</x-app-layout>
