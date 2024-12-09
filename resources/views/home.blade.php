@extends('zlayouts.template')

@section('content')
<main class="main">

    <!-- Slider Section -->
    <section id="slider" class="slider section dark-background">
      
      <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper init-swiper">

            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "centeredSlides": true,
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "navigation": {
                  "nextEl": ".swiper-button-next",
                  "prevEl": ".swiper-button-prev"
                }
              }
            </script>
            
            <div class="swiper-wrapper">
              {{-- src="{{asset("images/$tenLastArticle->image")}}" --}}
              @foreach ($threeLastArticles as $threeLastArticle)
                <div class="swiper-slide" style="background-image: url('{{ asset('images/' . $threeLastArticle->image) }}');">
                  <div class="content">
                    <h2><a href="{{ route('singlearticle.show', ['slug' => Str::slug($threeLastArticle->title), 'article' => $threeLastArticle->id]) }}">{{ substr($threeLastArticle->title, 0, 100) }}...</a></h2>
                  </div>
                </div>
              @endforeach
            </div>  

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <div class="swiper-pagination"></div>
          </div>
      </div>
    </section><!-- /Slider Section -->

    <!-- Trending Category Section -->
    <section id="trending-category" class="trending-category section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="container" data-aos="fade-up">
          <div class="row g-5">
            @foreach ($leftArticles as $leftArticle)
              <div class="col-lg-4">
                @php
                  $date = new DateTime($leftArticle->created_at);
                  $formattedDate = $date->format('d, F Y, H:i');
                @endphp
                <div class="post-entry lg">
                  <a href="{{ route('singlearticle.show', ['slug' => Str::slug($leftArticle->title), 'article' => $leftArticle->id]) }}"><img src="{{asset("images/$leftArticle->image")}}" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">{{ $leftArticle->categorie->name }}</span> <span class="mx-1">•</span> <span>{{$formattedDate}}</span></div>
                  <h5><a href="{{ route('singlearticle.show', ['slug' => Str::slug($leftArticle->title), 'article' => $leftArticle->id]) }}">{{substr ($leftArticle->title, 0,100) }}...</a></h2>
                  <p class="mb-4 d-block">{!! nl2br(e(substr($leftArticle->content, 0, 300))) !!}
                    ...</p>
                </div>
              </div>
            @endforeach
            

            <div class="col-lg-8">
              <div class="row g-5">
                @foreach ($tenLastArticles as $tenLastArticle)
                  <div class="col-lg-4 border-start custom-border">
                    <div class="post-entry">
                      <a href="{{ route('singlearticle.show', ['slug' => Str::slug($tenLastArticle->title), 'article' => $tenLastArticle->id]) }}"><img src="{{asset("images/$tenLastArticle->image")}}" alt="" class="img-fluid"></a>
                      @php
                        $date = new DateTime($tenLastArticle->created_at);
                        $formattedDate = $date->format('d, F Y, H:i');
                      @endphp
                      <div class="post-meta"><span class="date">{{$tenLastArticle->categorie->name}}</span> <span class="mx-1">•</span> <span>{{$formattedDate}}</span></div>
                      <h5>
                        <a href="{{ route('singlearticle.show', ['slug' => Str::slug($tenLastArticle->title), 'article' => $tenLastArticle->id]) }}">
                          {{$tenLastArticle->title}}
                        </a>
                      </h5>
                    
                      <p>{{substr ($tenLastArticle->content, 0, 100) }}...</p>
                    </div>
                  </div>  
                @endforeach
              </div>
            </div>

          </div> <!-- End .row -->
        </div>

      </div>

    </section><!-- /Trending Category Section -->

    <!-- Business Category Section -->
    <section id="business-category" class="business-category section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <div class="section-title-container d-flex align-items-center justify-content-between">
          <h2>Autres articles</h2>
        </div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-md-9 order-md-2">
            @foreach ($nextArticlesOnesLarges as $nextArticlesOnesLarge)
              <div class="d-lg-flex post-entry">
                @php
                    $date = new DateTime($nextArticlesOnesLarge->created_at);
                    $formattedDate = $date->format('d, F Y, H:i');
                @endphp
                <a href="{{ route('singlearticle.show', ['slug' => Str::slug($nextArticlesOnesLarge->title), 'article' => $nextArticlesOnesLarge->id]) }}" class="me-4 thumbnail d-inline-block mb-4 mb-lg-0">
                  <img src="{{asset("images/$nextArticlesOnesLarge->image")}}" alt="" class="img-fluid">
                </a>
                <div>
                  <div class="post-meta"><span class="date">{{ $nextArticlesOnesLarge->categorie->name }}</span> <span class="mx-1">•</span> <span>{{$formattedDate}}</span></div>
                  <h5><a href="{{ route('singlearticle.show', ['slug' => Str::slug($nextArticlesOnesLarge->title), 'article' => $nextArticlesOnesLarge->id]) }}">{{ substr($nextArticlesOnesLarge->title, 0,100) }}...</a></h5>
                  <p>{{ substr($nextArticlesOnesLarge->content, 0, 300) }}...</p>
                </div>
              </div> 
            @endforeach
            

            <div class="row">
              <div class="col-lg-4">
                @foreach ($nextArticlesOnes as $nextArticlesOne)
                  <div class="post-list border-bottom">
                    @php
                      $date = new DateTime($nextArticlesOne->created_at);
                      $formattedDate = $date->format('d, F Y, H:i');
                    @endphp
                    <a href="{{ route('singlearticle.show', ['slug' => Str::slug($nextArticlesOne->title), 'article' => $nextArticlesOne->id]) }}"><img src="{{asset("images/$nextArticlesOne->image")}}" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">{{$nextArticlesOne->categorie->name}}</span> <span class="mx-1">•</span> <span>{{$formattedDate}}</span></div>
                    <h5 class="mb-2"><a href="{{ route('singlearticle.show', ['slug' => Str::slug($nextArticlesOne->title), 'article' => $nextArticlesOne->id]) }}">{{substr($nextArticlesOne->title, 0,200)}}...</a></h5>
                    <p class="mb-4 d-block">{{substr($nextArticlesOne->content, 0,200)}}...</p>
                  </div> 
                @endforeach
              </div>
              @foreach ($nextArticlesOnesLarges2 as $nextArticlesOnesLarges)
                <div class="col-lg-8">
                  @php
                    $date = new DateTime($nextArticlesOnesLarges->created_at);
                    $formattedDate = $date->format('d, F Y, H:i');
                  @endphp
                  <div class="post-list">
                    <a href="{{ route('singlearticle.show', ['slug' => Str::slug($nextArticlesOnesLarges->title), 'article' => $nextArticlesOnesLarges->id]) }}"><img src="{{asset("images/$nextArticlesOnesLarges->image")}}" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">{{$nextArticlesOnesLarges->categorie->name}}</span> <span class="mx-1">•</span> <span>{{$formattedDate}}</span></div>
                    <h5 class="mb-2"><a href="{{ route('singlearticle.show', ['slug' => Str::slug($nextArticlesOnesLarges->title), 'article' => $nextArticlesOnesLarges->id]) }}">{{substr($nextArticlesOnesLarges->title, 0, 100)}}...</a></h5>
                    <p class="mb-4 d-block">{{substr($nextArticlesOnesLarges->content, 0, 300)}}...</p>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
          <div class="col-md-3">
            @foreach ($nextArticlesFives as $nextArticlesFive)
            <div class="post-list border-bottom">
              @php
                $date = new DateTime($nextArticlesOnesLarges->created_at);
                $formattedDate = $date->format('d, F Y, H:i');
              @endphp
              <div class="post-meta"><span class="date">{{ $nextArticlesFive->categorie->name }}</span> <span class="mx-1">•</span> <span>{{$formattedDate}}</span></div>
              <a href="{{ route('singlearticle.show', ['slug' => Str::slug($tenLastArticle->title), 'article' => $nextArticlesFive->id]) }}"><h5 class="mb-2">{{ substr($nextArticlesFive->title,0, 200) }}</h5>
              <span class="author mb-3 d-block">Voir plus...</span></a>
            </div>
            @endforeach
          </div>
        </div>

      </div>

    </section><!-- /Business Category Section -->

  </main>

@endsection