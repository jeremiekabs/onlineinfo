@extends('zlayouts.template')
@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Voir plus</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li class="current">Voir plus</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Details Section -->
          <section id="blog-details" class="blog-details section">
            <div class="container">

              <article class="article">

                <div class="post-img">
                  <img src="{{asset("images/$article->image")}}" alt="" class="img-fluid">
                </div>

                <h2 class="title">{{$article->title}}</h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{$article->auteur}}</a></li>
                    @php
                        $date = new DateTime($article->created_at);
                        $formattedDate = $date->format('d, F Y, H:i');
                    @endphp
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{$formattedDate}}</time></a></li>
                  </ul>
                </div><!-- End meta top -->

                <div class="content">
                  <p>{!! nl2br(e($article->content)) !!}</p>
                </div>

              </article>

            </div>
          </section><!-- /Blog Details Section -->

          <!-- Blog Comments Section -->
          <section id="blog-comments" class="blog-comments section">

            <div class="container">

              <h4 class="comments-count">{{$countComment}} Commentaire(s)</h4>

              <div id="comment-1" class="comment">
                @foreach ($commentaires as $commentaire)
                <div class="d-flex">
                  @php
                    $date = new DateTime($commentaire->created_at);
                    $formattedDate = $date->format('d, F Y, H:i');
                  @endphp
                  <div class="avatar m-2">
                      <i class="bi bi-person-circle"></i>
                  </div>
                  <div>
                      <h5><a href="">{{$commentaire->auteur}}</a><a href="#" class="reply"><i class="bi bi-reply-fill"></i> Vous</a></h5>
                      <time datetime="2020-01-01">{{ $formattedDate }}</time>
                      <p>
                          {{$commentaire->content}}
                      </p>
                  </div>
              </div>
              
                @endforeach
              </div><!-- End comment #1 -->

            </div>

          </section><!-- /Blog Comments Section -->

          <!-- Comment Form Section -->
          <section id="comment-form" class="comment-form section">
            <div class="container">

              <form method="POST" action="{{ route('singlearticle.store', ['slug' => Str::slug($article->title), 'article' => $article->id]) }}">
                @csrf
                @method('POST')
                <h4>Laissez un commentaire</h4>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <p>Nous serions ravis de connaître votre avis. Partagez vos pensées, vos questions ou vos suggestions dans les commentaires ci-dessous* </p>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input name="auteur" type="text" class="form-control" placeholder="Votre nom*">
                  </div>
                </div>
                <div class="row">
                  <div class="col form-group">
                    <textarea name="content" class="form-control" placeholder="Votre commentaire*"></textarea>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Poster</button>
                </div>

              </form>

            </div>
          </section><!-- /Comment Form Section -->

        </div>

        <div class="col-lg-4 sidebar">

          <div class="widgets-container">

            <!-- Blog Author Widget -->
            <div class="blog-author-widget widget-item">

              <div class="d-flex flex-column align-items-center">
                <div class="d-flex align-items-center w-100">
                  <div>
                    <h4>Retrouvez-nous sur</h4>
                    <div class="social-links">
                      <a href="https://x.com/#"><i class="bi bi-twitter-x"></i></a>
                      <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                      <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                      <a href="https://instagram.com/#"><i class="biu bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>

                <p>
                    Nous sommes ravis de vous inviter à nous rejoindre sur nos pages officielles sur les réseaux sociaux ! En nous suivant, vous aurez accès à des contenus exclusifs, des mises à jour en temps réel, et vous pourrez interagir directement avec notre communauté.
                </p>

              </div>

            </div><!--/Blog Author Widget -->

            <!-- Recent Posts Widget -->
            <div class="recent-posts-widget widget-item">

              <h3 class="widget-title">Articles récents</h3>
                @foreach ($latesArticles as $latesArticle)
                    <div class="post-item">
                        @php
                            $date = new DateTime($latesArticle->created_at);
                            $formattedDate = $date->format('d, F Y, H:i');
                        @endphp
                        <img src="{{asset("images/$latesArticle->image")}}" alt="" class="flex-shrink-0">
                        <div>
                        <h4><a href="{{ route('singlearticle.show', ['slug' => Str::slug($latesArticle->title), 'article' => $latesArticle->id]) }}">{{substr($latesArticle->title, 0,50)}}...</a></h4>
                        <time datetime="2020-01-01">{{ $formattedDate }}</time>
                        </div>
                    </div><!-- End recent post item-->
                @endforeach
          </div>

        </div>

      </div>
    </div>

  </main>
@endsection