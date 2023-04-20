<x-app-layout>

    <!-- Contacto -->

    <section class="login position-relative justify-content-center align-content-center py-2 py-lg-5">


        <div class="login_container container ">


            <form class="login__card position-relative border-0 p-5 my-5 d-flex flex-column  shadow-sm rounded-3 m-auto "
                action="register" method="POST">

                @csrf



                <img src="img/sesion/difuminar.png" class="login__difuminar position-absolute top-0 end-0" alt="">
                <img src="img/sesion/difuminar.png" class="login__difuminar position-absolute bottom-0 start-0"
                    alt="">
                <span class="d-flex gap-2 align-items-center justify-content-center mb-2"><img src="img/logo/logo.png"
                        class="login__logo align-self-center " alt="">
                    <h4 class="title__logo text-secondary fs-3 pt-2 fw-bold">
                        Cuantica <span class="text-primary">Group</span>
                    </h4>
                </span>


                <div class="">
                    <input name="name" type="text" class="form-control p-3 px-4" placeholder="Nombre" value="{{ old('name') }}">

                    @error('name')
                    <span class="text-danger pt-2">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="">
                    <input name="email" type="email" class="form-control p-3 px-4" id="exampleFormControlInput1"
                    placeholder="Email" value="{{ old('email') }}">

                    @error('email')
                    <span class="text-danger pt-2">{{$message}}</span>
                    @enderror

                </div>
                <div class="">
                    <input name="password" type="password" class="form-control p-3 px-4" placeholder="Contraseña">
                    
                    @error('password')
                    <span class="text-danger pt-2">{{$message}}</span>
                    @enderror
                </div>

                <div class="">
                    <input name="password_confirmation" type="password" class="form-control p-3 px-4"
                    placeholder="Confirmar Contraseña">
                    @error('password_confirmation')
                    <span class="text-danger pt-2">{{$message}}</span>
                    @enderror
                </div>
                
                
                
                 <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label text-muted" for="flexCheckDefault">
                        Acepto los <a href="">Términos del servicio</a> y la <a href="">Política de
                            Privacidad</a>
                    </label>
                </div> 
                <input type="submit" class="btn btn-secondary py-3" value="Registrarse">





            </form>


        </div>



    </section>

    <!-- Fin Contacto -->

</x-app-layout>
