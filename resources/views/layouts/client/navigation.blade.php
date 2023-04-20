  <!-- Menu -->

  <nav class="navbar navbar-expand-lg bg-white shadow-sm py-3 fixed-top">

      <div class="container d-flex align-items-center">
 


          <a class="navbar-brand" href="/">
              <img class="logo" src="{{ $enterprise->image }}" alt="Logo" class="d-inline-block align-text-top">
          </a>


          @php
              $myvalue = $enterprise->name;
              $arr = explode(' ', trim($myvalue));
              
          @endphp

          <h4 class="title__logo text-secondary pt-2 ">

              {{ $arr[0] }}
              <span class="text-primary">
                  @php
                      
                      foreach ($arr as $ar) {
                          if ($ar != $arr[0]) {
                              echo $ar . ' ';
                          }
                      }
                  @endphp
              </span>
          </h4>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
              <div class="navbar-nav ms-auto gap-lg-2">


                  @foreach ($links as $link)
                      @if ($link['url'] == route('sesion.show'))
                          @auth

                              <!-- Example split danger button -->
                              <div class="btn-group d-flex align-items-center">
                                  <p type="button" class="m-0 fw-light">{{ Auth::user()->name }}</p>
                                  <button type="button" class="bg-white border-0 dropdown-toggle dropdown-toggle-split"
                                      data-bs-toggle="dropdown" aria-expanded="false">
                                      <span class="visually-hidden">Toggle Dropdown</span>
                                  </button>
                                  <ul class="dropdown-menu">

                                      @can('admin.dashboard')
                                          <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                          <li>
                                              <hr class="dropdown-divider">
                                          </li>
                                      @endcan




                                      <li><a class="dropdown-item" href="{{ route('logaout') }}">Cerrar Sesion</a></li>


                                  </ul>
                              </div>
                          @else
                              <a class="nav-link {{ $link['active'] ? 'active fw-bold' : '' }}" aria-current="page"
                                  href="{{ $link['url'] }}">{{ $link['title'] }}</a>

                          @endauth
                      @else
                          <a class="nav-link {{ $link['active'] ? 'active fw-bold' : '' }}" aria-current="page"
                              href="{{ $link['url'] }}">{{ $link['title'] }}</a>
                      @endif
                  @endforeach


              </div>
          </div>
      </div>
  </nav>
  <!-- Fin menu -->
