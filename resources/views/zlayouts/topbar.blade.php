<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('login') }}" class="logo d-flex align-items-center me-auto me-xl-0"> 
        <h1 class="sitename">Info 7/7</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('home')}}" class="active">Accueil</a></li>
          <li><a href="{{route('apropos')}}">A propos</a></li>
          <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              @php
                use App\Models\Categorie;
                $categories = Categorie::all();
              @endphp
              @foreach ($categories as $categorie)
                <li><a href="{{route('categoriearticle.show', $categorie->id)}}">{{ $categorie->name }}</a></li>
              @endforeach
              
            </ul>
          </li>
          <li><a href="{{route('contact.index')}}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>