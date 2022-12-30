<x-app-layout>

    <!-- Contacto -->

    <section class="login position-relative justify-content-center align-content-center py-2 py-lg-5">

    
        <div class="login_container container ">

        
            <form
                class="login__card position-relative border-0 p-5 my-5 d-flex flex-column  shadow-sm rounded-3 m-auto " action="sesion" method="POST">

                @csrf


                @if (session('info'))
                <div class="alert alert-danger">
                    <strong>{{session('info')}}</strong>
                </div>
                @endif
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
                    <input name="email" type="email" class="form-control p-3 px-4" id="exampleFormControlInput1"
                    placeholder="Email">

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

              



                <input type="submit" class="btn btn-secondary py-3" value="Ingresar">

                <span class="text-center text-muted">Connect With</span>

                <div class="login__redes d-flex gap-2 justify-content-between ">
                    <a href=""
                        class="text-decoration-none login__red boton facebook d-flex justify-content-center  flex-fill">
                        <i class="fa-brands fa-facebook-f"></i> </a>
                    <a href=""
                        class="text-decoration-none login__red boton google d-flex justify-content-center  flex-fill">
                        <i class="fa-brands fa-google"></i> </a>
                    <a href=""
                        class="text-decoration-none login__red boton twitter d-flex justify-content-center  flex-fill">
                        <i class="fa-brands fa-twitter"></i> </a>
                </div>
                <div class="d-flex flex-column justify-content-center mt-3">
                    <span class="text-center text-muted">Forget Password?</span>
                    <span class="text-center text-muted">Not a member yet?<a href="{{ route('register.show') }}">Sign Up</a></span>
                </div>


            </form>


        </div>



    </section>

    <!-- Fin Contacto -->

</x-app-layout>
