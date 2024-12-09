@extends('zlayouts.template')
@section('content')
<main class="main">

  <!-- Page Title -->
  <div class="page-title position-relative">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">{{ $categorie->name }}</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Categories</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <div class="container">
    <div class="row">

      <div class="col-lg-8">

        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">

          <div class="container">
            <div class="row gy-4">
              @foreach ($categoriesArts as $categoriesArt)
                <div class="col-lg-6">
                  <article class="position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                      <img src="{{asset("images/$categoriesArt->image")}}" class="img-fluid" alt="">
                      <span class="post-date">{{$categoriesArt->categorie->name}}</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                      <h3 class="post-title">{{ substr($categoriesArt->title, 0,100) }}...</h3>

                      <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                          <i class="bi bi-person"></i> <span class="ps-2">{{ $categoriesArt->auteur }}</span>
                        </div>
                      </div>

                      <p>
                        {{substr ($categoriesArt->content, 0, 200) }}...
                      </p>

                      <hr>

                      <a href="{{ route('singlearticle.show', ['slug' => Str::slug($categoriesArt->title), 'article' => $categoriesArt->id]) }}" class="readmore stretched-link"><span>Voir plus</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                  </article>
                </div><!-- End post list item -->
              @endforeach
            </div>
          </div>

        </section><!-- /Blog Posts Section -->

        <!-- Blog Pagination Section -->
        <section id="blog-pagination" class="blog-pagination section">

          <div class="container">
            <div class="d-flex justify-content-center">
              {{ $categoriesArts->links() }}
            </div>
          </div>

        </section><!-- /Blog Pagination Section -->

      </div>

      <div class="col-lg-4 sidebar">

        <div class="widgets-container">

          <!-- Blog Author Widget 2 -->
          <div class="blog-author-widget-2 widget-item">

            <div class="d-flex flex-column align-items-center">
              <img src="{{asset("front/img/blog/blog-author.jpg")}}" class="rounded-circle flex-shrink-0" alt="">
              <h4>Retrouvez-nous sur</h4>
              <div class="social-links">
                <a href="https://x.com/#"><i class="bi bi-twitter-x"></i></a>
                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                <a href="https://instagram.com/#"><i class="biu bi-linkedin"></i></a>
              </div>

              <p>
                Nous sommes ravis de vous inviter à nous rejoindre sur nos pages officielles sur les réseaux sociaux ! En nous suivant, vous aurez accès à des contenus exclusifs, des mises à jour en temps réel, et vous pourrez interagir directement avec notre communauté.
              </p>

            </div>
          </div><!--/Blog Author Widget 2 -->

          <!-- Recent Posts Widget -->
          <div class="recent-posts-widget widget-item">

            <h3 class="widget-title">Postes recents</h3>
            @foreach ($randomArticles as $randomArticle)
              <div class="post-item">
                <img src="{{asset("images/$randomArticle->image")}}" alt="" class="flex-shrink-0">
                <div>
                  @php
                    $date = new DateTime($randomArticle->created_at);
                    $formattedDate = $date->format('d, F Y, H:i');
                  @endphp
                  <h4><a href="{{ route('singlearticle.show', ['slug' => Str::slug($randomArticle->title), 'article' => $randomArticle->id]) }}">{{substr ($randomArticle->title, 0, 70) }}...</a></h4>
                  <time datetime="2020-01-01">{{ $formattedDate }}</time>
                </div>
              </div><!-- End recent post item-->
            @endforeach
          </div><!--/Recent Posts Widget -->

        </div>

      </div>

    </div>
  </div>
    
  </main>
@endsection
