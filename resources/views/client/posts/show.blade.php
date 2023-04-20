<x-app-layout>


    <!-- blog -->
    <figure>
        <img src="{{ asset('img/blog/fondo_post.jpg') }}" class="img-fluid w-100" style="height: 800px; object-fit: cover;"
            alt="post">
    </figure>
    <section class="blog position-relative py-2 pb-lg-5 ">

        <div class="blog__container container py-2 py-lg-5 d-grid gap-4">



            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> {{ $post->title }}</li>
                </ol>
            </nav>

            <div class=" d-flex flex-column gap-4 p-0 ">




                <h1 class="blog__cardtitle mb-3 p-0">
                    {{ $post->title }}
                </h1>

                <div class="  d-flex gap-3">
                    <div class="">
                        <img src="{{  $post->user->image }}" class="user__post" alt="">
                    </div>
                    <div class="">
                        <h6 class="user__postname fw-bold  mb-1"> {{ $post->user->name }}</h6>
                        <p class="comment__paragraph p-0 m-0">
                            {{ $post->published_at->format('d M Y') }} . 5 min de lectura </p></p>
                    </div>
    
                </div>
                

            </div>

            <div class="">
                <figure>
                    <img src="{{ $post->image}}" class="img-fluid w-100 rounded-5" style="height: 600px; object-fit: cover;"
                        alt="{{ $post->name}}">
                </figure>



                <div class="w-100 overflow-hidden">
                    {!! $post->content !!}
                </div>

                <div class="d-flex flex-column gap-2 justify-content-end">
                    <h6 class="p-0 m-0">Categoria:</h6>
                    <div class=" d-flex flex-wrap  gap-2   m-0 p-0">
                        
                        <span class="blog__category py-1 px-2 ">
                            <h6 class=" fw-bold text-secondary d-inline-block p-0 m-0">{{ $post->category->name }}</h6>
                        </span>
                    </div>
                    <h6 class="p-0 m-0">Etiquetas:</h6>
                    <div class=" d-flex flex-wrap  gap-2  ">
                       
                        

                        @foreach ($post->tags as $tag)
                            <span href="#" class="blog__cardtag text-decoration-none">
                                <h6 class="tag__name fw-bold text-primary m-0">{{ $tag->name }}</h6>
                            </span>
                        @endforeach


                    </div>

                </div>

                <hr>
                @livewire('client.question', ['model' => $post])
            </div>













        </div>

    </section>

    <!-- fin blog -->


</x-app-layout>
