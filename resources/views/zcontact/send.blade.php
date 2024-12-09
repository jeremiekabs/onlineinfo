@extends('zlayouts.template')
@section('content')
<main class="main">
    <!-- Page Title -->
    <div class="page-title">
        <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Contact</h1>
        <nav class="breadcrumbs">
            <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Contact</li>
            </ol>
        </nav>
        </div>
    </div><!-- End Page Title -->
    
    <!-- Contact Section -->
    <section class="contact section">
    
        <div class="container">
    
        <div class="row gy-4">
    
            <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                    <h3>Adresse</h3>
                    <p> Commune de Lingwala, Ville de Kinshasa  </p>
                </div>
            </div><!-- End Info Item -->
    
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                    <h3>Phone</h3>
                    <p>+243 97 34 06 839</p>
                </div>
            </div><!-- End Info Item -->
    
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                <h3>Email Us</h3>
                <p>simonmbaki@gmail.com</p>
                </div>
            </div><!-- End Info Item -->
    
            </div>
    
            <div class="col-lg-8">
                <form class="form-control" action="{{ route('contact.send') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Entrez un nom Ex: Simon Mbaki">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Entrez Email Ex: simonmbaki@gmail.com" required>
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Entrez un sujet Ex: Démande d'une redaction d'article">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Entrez le message, une description de votre sujet"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            @if (session('msg'))
                                <div class="alert alert-success">
                                    {{ session('msg') }}
                                </div>
                            @endif
                            <button class="btn btn-primary">Send Message</button>
                        </div>
                    </div>
                </form>
                
            </div><!-- End Contact Form -->
    
        </div>
    
        </div>
    
    </section><!-- /Contact Section -->
    
</main>
@endsection