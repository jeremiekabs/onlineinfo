@extends('zlayouts.template')
@section('content')
    
  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">A propos de nous</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li class="current">A propos</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3>Notre mission et pourquoi nous faire confiance ? </h3>
            <p class="fst-italic">
                Chez Info 7/7, notre mission est de vous offrir une couverture complète de l’actualité politique, économique, sociale, culturelle et sportive. Nous croyons en l’importance d’une information accessible et transparente pour tous, et nous nous efforçons de maintenir les plus hauts standards de journalisme.
            </p>
            <p>Bienvenue sur Info 7/7, votre source incontournable pour des informations fiables et à jour en République Démocratique du Congo et au-delà. Nous nous engageons à vous fournir des nouvelles précises, pertinentes et impartiales, couvrant une variété de sujets pour vous tenir informé 24 heures sur 24, 7 jours sur 7.</p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Informations fiables</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Informations à jours</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Qualité redactionnelle</span></li>
            </ul>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="{{("front/img/about-company-1.jpg")}}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="{{("front/img/about-company-2.jpg")}}" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="{{("front/img/about-company-3.jpg")}}" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->

  </main>

@endsection