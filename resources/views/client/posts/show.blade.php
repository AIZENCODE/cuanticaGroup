<x-app-layout>


    <!-- blog -->

    <section class="blog position-relative py-2 py-lg-5 ">

        <div class="blog__container container py-2 py-lg-5 d-grid gap-4">


        

            <div class="blog__cardtags d-flex  gap-2 mt-3 mt-lg-0">


                @foreach ($post->tags as $tag)
                    <a href="#" class="blog__cardtag text-decoration-none">
                        <h6 class="tag__name fw-bold text-primary m-0">{{ $tag->name }}</h6>
                    </a>
                @endforeach


            </div>
            <div class="">
                <h2 class="blog__cardtitle m-0 ">
                    {{ $post->title }}
                </h2>
    
                <p class="blog__carddate text-primary fw-bold m-0 p-0">
                    {{ $post->user->name . ' . ' . $post->published_at->format('d M Y') }}</p>
                <hr>
            </div>
          
            <figure>
                <img src="{{$post->image}}" class="img-fluid w-100" style="height: 500px; object-fit: cover;" alt="{{$post->title}}">
            </figure>

            <div class="">
                {!! $post->content !!}
            </div>
           
               
        



        </div>

    </section>

    <!-- fin blog -->


</x-app-layout>
