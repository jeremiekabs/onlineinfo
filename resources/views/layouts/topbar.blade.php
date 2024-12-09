<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <h3>Administration</h3>h
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <div class="d-flex align-items-center justify-content-between">
    <a href="{{route('home')}}" class="btn btn-primary"> Retour au site</a>
  </div>

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      @if (Auth::check() && Auth::user()->statut == 2)
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="{{ route('user.index') }}">
              <i class="bi bi-key"></i>
          </a>
        </li>
      @endif
      <li class="container nav-item dropdown">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">
                <i class="bi bi-box-arrow-right"></i> Deconnexion
            </button>
        </form>
      </li>

      
    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->