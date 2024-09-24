@extends('layouts.main')

@section('content')
<div class="container product-page my-5">
    <div class="row text-center">
        <h2>Our Wholesale Greeting Cards</h2>
        <p>Wholesale greeting card printing is a great way to build customer loyalty. Express gratitude, holiday wishes and other sentiments to valued clients with custom greeting cards.</p>
    </div>

    <div class="row mt-5">
        <!-- Card 1: Matte Greeting Cards -->
        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('images/greeting-cards/matte-greeting-cards.jpg') }}" class="card-img-top" alt="Matte Greeting Cards">
                <div class="card-body">
                    <h5 class="card-title">Matte Greeting Cards</h5>
                    <p class="card-text">Get Matte Greeting Cards for an economical option that feels smooth to the touch.</p>
                    <a href="{{ route('greeting-cards.matte-finish') }}" class="category-link">14pt + Matte Finish</a>
                </div>
            </div>
        </div>

        <!-- Card 2: High Gloss Greeting Cards -->
        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('images/greeting-cards/high-gloss-greeting-cards.jpg') }}" class="card-img-top" alt="High Gloss Greeting Cards">
                <div class="card-body">
                    <h5 class="card-title">High Gloss Greeting Cards</h5>
                    <p class="card-text">Greeting Cards with UV (High Gloss) for a shiny finish that enhances images and color.</p>
                    <a href="{{ route('greeting-cards.high-gloss') }}" class="category-link">14pt + UV (High Gloss)</a>
                </div>
            </div>
        </div>

        <!-- Card 3: AQ Greeting Cards -->
        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('images/greeting-cards/aq-greeting-cards.jpg') }}" class="card-img-top" alt="AQ Greeting Cards">
                <div class="card-body">
                    <h5 class="card-title">AQ Greeting Cards</h5>
                    <p class="card-text">Our AQ Greeting Cards feature a semi-gloss finish for a sharp, professional look.</p>
                    <a href="{{ route('greeting-cards.aq') }}" class="category-link">14pt + AQ</a>
                </div>
            </div>
        </div>

        <!-- Card 4: Writable Greeting Cards -->
        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('images/greeting-cards/writable-greeting-cards.jpg') }}" class="card-img-top" alt="Writable Greeting Cards">
                <div class="card-body">
                    <h5 class="card-title">Writable Greeting Cards</h5>
                    <p class="card-text">Print custom greeting cards with writable interiors for handwritten messages.</p>
                    <a href="{{ route('greeting-cards.13pt-enviro') }}" class="category-link">13pt Enviro</a>
                    <a href="{{ route('greeting-cards.14pt-writable-aq') }}" class="category-link mt-2">14pt Writable + AQ</a>
                    <a href="{{ route('greeting-cards.14pt-writable-uv') }}" class="category-link mt-2">14pt Writable + UV</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <!-- Card 5: Specialty Greeting Cards -->
        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('images/greeting-cards/specialty-greeting-cards.jpg') }}" class="card-img-top" alt="Specialty Greeting Cards">
                <div class="card-body">
                    <h5 class="card-title">Specialty Greeting Cards</h5>
                    <p class="card-text">Custom greeting cards with specialty stocks and finishes to make your message stand out.</p>
                    <a href="{{ route('greeting-cards.metallic-foil') }}" class="category-link">Metallic Foil</a>
                    <a href="{{ route('greeting-cards.spot-uv') }}" class="category-link mt-2">Spot UV</a>
                    <a href="{{ route('greeting-cards.kraft-paper') }}" class="category-link mt-2">Kraft Paper</a>
                    <a href="{{ route('greeting-cards.pearl-paper') }}" class="category-link mt-2">Pearl Paper</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
