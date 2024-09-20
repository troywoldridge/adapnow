@extends('layouts.main') <!-- Assuming your main layout is in app.blade.php -->

@section('content')

    <!-- Hero Section with Carousel -->
    <section class="hero">
        <div id="heroCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#heroCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#heroCarousel" data-slide-to="1"></li>
                <li data-target="#heroCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="{{ asset('images/all-images/removable-wall-decal-4.jpg') }}" class="d-block w-100" alt="Adhesive Vinyl">
                    <div class="carousel-caption-below">
                        <h5>Adhesive Vinyl</h5>
                        <p>High-quality removable Vinyl for your business or event.</p>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/all-images/spot-uv-postcards.png') }}" class="d-block w-100" alt="Business Cards">
                    <div class="carousel-caption-below">
                        <h5>HUGE Selection of Business Cards</h5>
                        <p>From budget-friendly to high-end business cards, we have them all at the best prices!</p>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/all-images/14pt-matte-finish-greeting-cards.jpg') }}" class="d-block w-100" alt="Print Products">
                    <div class="carousel-caption-below">
                        <h5>Print Products</h5>
                        <p>We provide flyers, brochures, and all your print marketing needs at wholesale pricing!</p>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    

    <!-- Product Categories Section -->
    <section class="product-categories">
        <h2>Explore Our Product Categories</h2>
        <div class="product-grid">
            <div class="product-item">
                <img src="{{ asset('images/all-images/summer-festival.png') }}" alt="Summer Festival Banner">
                <h3>Large Format Printing</h3>
                <p>High-quality custom large format printing for your business or event.</p>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/patriotic/patriotic-hoodie-and-tshirt.webp') }}" alt="Apparel">
                <h3>Apparel</h3>
                <p>Custom t-shirts, hoodies, and more with unique designs.</p>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/all-images/tent-cards-14pt.jpg') }}" alt="Print Products">
                <h3>Print Products</h3>
                <p>Flyers, brochures, and all your print marketing needs.</p>
            </div>
        </div>
    </section>

    <!-- Featured Services Section -->
    <section class="featured-services">
        <h2>Why Choose Us?</h2>
        <div class="services-grid">
            <div class="service-item">
                <i class="fas fa-truck"></i>
                <h4>Fast Shipping</h4>
                <p>Get your order quickly with our fast and reliable shipping services.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-palette"></i>
                <h4>Custom Designs</h4>
                <p>Work with our design team to bring your vision to life.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-balance-scale"></i>
                <h4>Best Prices</h4>
                <p>We offer competitive pricing without compromising quality.</p>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <h2>What Our Customers Say</h2>
        <div class="testimonial-slider">
            <div class="testimonial-item">
                <p>"Great quality and fast service. Will order again!"</p>
            </div>
            <div class="testimonial-item">
                <p>"The best printing experience I’ve had, highly recommend."</p>
            </div>
            <div class="testimonial-item">
                <p>"Excellent customer support and outstanding print quality!"</p>
            </div>
        </div>
    </section>
    

@endsection
