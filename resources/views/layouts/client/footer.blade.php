<footer class="footer bg-secondary ">

    <div class="footer__container container py-5 d-grid gap-4">

        <div class="footer__content pt-5 pt-lg-0 row m-0 justify-content-between text-white">

            <div class="col-12 col-lg-6 col-xl-4 footer__cuantica">

                <div class="cuantica d-flex flex-column gap-2">

                    <h2 class="cuantica__title d-flex align-items-center gap-1"><img class="cuantica__img d-block"
                            src="{{ asset('img/logo/cuantica-06.png') }}" alt=""> Cuantica Group</h2>

                    

                          
                    <p class="cuantica__paragraph">  {{$enterprise->description}}</p>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-2 footer__politicas d-flex flex-column gap-2">
                <h3 class="footer__title"> Politicas</h3>
                <div class="footer__items d-flex flex-column gap-2">
                    <a href="#" class="text-decoration-none text-white">Politica 1</a>
                    <a href="#" class="text-decoration-none text-white">Politica 1</a>
                    <a href="#" class="text-decoration-none text-white">Politica 1</a>
                </div>

            </div>

            <div class="col-12 col-lg-6 col-xl-2 footer__links d-flex flex-column gap-2">
                <h3 class="footer__title"> Links Rápidos</h3>
                <div class="footer__items d-flex flex-column gap-2">
                    @foreach ($links as $link)
                    

                    <a href="{{ $link['url'] }}" class="text-decoration-none text-white">{{ $link['title'] }}</a>

                    
                    @endforeach
            
                </div>

            </div>


            <div class="col-12 col-lg-6 col-xl-4 footer__contact d-flex flex-column gap-2">
                <h3 class="footer__title"> Contactenos</h3>
                <div class="footer__items d-flex  flex-column gap-2 border-bottom border-white pb-4">


                    <p class="text-white m-0 d-flex  gap-2 align-items-center"><img class="contact__icon"
                            src="{{ asset('img/footer/edificio.png') }}" alt="">{{$enterprise->direccion}}</p>

                    <p class="text-white m-0 d-flex gap-2 align-items-center"><img class="contact__icon"
                            src="{{ asset('img/footer/llamar.png') }}" alt="">{{$enterprise->telefono_uno ." - " .  $enterprise->telefono_dos}}</p>

                    <p class="text-white d-flex gap-2  m-0 align-items-center"><img class="contact__icon"
                            src="{{ asset('img/footer/correo (1).png') }}" alt="">{{$enterprise->correo}}
                    </p>


                </div>
                <div class="footer__socials d-flex flex-wrap justify-content-center pt-2 gap-3">


                    <div class="footer__link">
                        <a href="{{$enterprise->facebook}}" class="d-flex align-items-center" target="_blank">
                            <img class="footer__social" src="{{ asset('img/socials/simbolo-de-la-aplicacion-de-facebook.png') }}"
                                alt="">
                        </a>
                    </div>
                    <div class="footer__link">
                        <a href="{{$enterprise->instagram}}" class="d-flex align-items-center" target="_blank">
                            <img class="footer__social" src="{{ asset('img/socials/instagram (3).png') }}" alt="">
                        </a>
                    </div>
                    <div class="footer__link">
                        <a href="{{$enterprise->twitter}}" class="d-flex align-items-center" target="_blank">
                            <img class="footer__social" src="{{ asset('img/socials/twitter.png') }}" alt="">
                        </a>
                    </div>
                    <div class="footer__link">
                        <a href="{{$enterprise->linkedin}}" class="d-flex align-items-center" target="_blank">
                            <img class="footer__social" src="{{ asset('img/socials/linkedin.png') }}" alt="">
                        </a>
                    </div>
                    <div class="footer__link">
                        <a href="{{$enterprise->youtube}}" class="d-flex align-items-center" target="_blank">
                            <img class="footer__social" src="{{ asset('img/socials/youtube.png') }}" alt="">
                        </a>
                    </div>


                </div>

            </div>


        </div>

    </div>
    <p class="text-center text-secondary border-top m-0 p-2 bg-white">Copyright © 2022 CUANTICA GROUP - Todos los
        derechos Reservados - version 4.1</p>
</footer>
