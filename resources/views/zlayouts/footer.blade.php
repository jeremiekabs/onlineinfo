<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Info 7/7</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Comune de Lingwala</p>
            <p>Ville de Kinshasa</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+243 99 75 34 609</span></p>
            <p><strong>Email:</strong> <span>info7/7@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Liens par catégorie</h4>
              @php
                use App\Models\Categorie;
                $categories = Categorie::all();
              @endphp
          <ul>
            @foreach ($categories as $categorie)
              <li><a href="{{route('categoriearticle.show', $categorie->id)}}">{{ $categorie->name }}</a></li>
            @endforeach
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nos Services</h4>
          <ul>
            <li>Redaction des articles</li>
            <li>Copyrighting</li>
            <li>Informations</li>
            <li>Marketing</li>
            <li>Medias en ligne</li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nous sommes un</h4>
          <ul>
            <li>Site de medias en ligne</li>
            <li>Lieu sûr pour s'informer</li>
            <li>Cadre instructif</li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Notre Equipe</h4>
          <ul>
            <li>Simon MBAKI : CEO</li>
            <li>Monsieur MONSIEUR X</li>
            <li>Monsieur MONSIEUR y</li>
            <li>Monsieur MONSIEUR z</li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Univers Numérique</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Développer par <a href="https://bootstrapmade.com/">Jérémie TSHIBANGU KABASELE</a>
      </div>
    </div>

  </footer>