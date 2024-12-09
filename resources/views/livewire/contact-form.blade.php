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
    <section id="contact" class="contact section">
    
        <div class="container" data-aos="fade-up" data-aos-delay="100">
    
        <div class="row gy-4">
    
            <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
                </div>
            </div><!-- End Info Item -->
    
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
                </div>
            </div><!-- End Info Item -->
    
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
                </div>
            </div><!-- End Info Item -->
    
            </div>
    
            <div class="col-lg-8">
                <form class="php-email-form" wire:submit=send method="POST" data-aos="fade-up" data-aos-delay="200">
                    @csrf
                    @method('POST')
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" wire:model="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" wire:model="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" wire:model="message" rows="6" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
                
            </div><!-- End Contact Form -->
    
        </div>
    
        </div>
    
    </section><!-- /Contact Section -->
    
</main>
@endsection