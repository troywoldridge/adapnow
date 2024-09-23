@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h2 class="text-center">Specialty Business Cards</h2>

    <div class="row">
        <!-- Specialty Business Cards -->
        
        <!-- Die Cut Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/die-cut-business-cards.png') }}" class="card-img-top" alt="Die Cut Business Cards">
                <div class="card-body">
                    <h5 class="card-title">Die Cut Business Cards</h5>
                    <p class="card-text">The best die cut business cards with our rounded corner, oval, or leaf shaped cards. The smooth, round edges will elevate them as premium business cards that help grow your business.</p>
                    <p class="card-text"><strong>$11.50</strong></p>
                    <a href="{{ route('business-card.detail', 'die-cut-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Durable Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/durable-business-cards-3.png') }}" class="card-img-top" alt="Durable Business Cards">
                <div class="card-body">
                    <h5 class="card-title">Durable Business Cards</h5>
                    <p class="card-text">Sourced from raw material, 100% recyclable, non-toxic, and extremely durable. These waterproof and tear-resistant cards ensure that your business cards will always look great, even in adverse conditions.</p>
                    <p class="card-text"><strong>$11.50</strong></p>
                    <a href="{{ route('business-card.detail', 'durable-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Kraft Paper Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/kraft-paper-business-cards.jpg') }}" class="card-img-top" alt="Kraft Paper Business Cards">
                <div class="card-body">
                    <h5 class="card-title">Kraft Paper Business Cards</h5>
                    <p class="card-text">Kraft Paper business cards are 100% recyclable and environmentally friendly, with a bold, natural look perfect for designs with a rustic feel.</p>
                    <p class="card-text"><strong>$11.50</strong></p>
                    <a href="{{ route('business-card.detail', 'kraft-paper-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Metallic Foil Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/metallic-foil-business-cards.png') }}" class="card-img-top" alt="Metallic Foil Business Cards">
                <div class="card-body">
                    <h5 class="card-title">Metallic Foil Business Cards</h5>
                    <p class="card-text">Raised foil postcards with silver or gold custom foil printing. A premium look perfect for high-end business cards.</p>
                    <p class="card-text"><strong>$11.50</strong></p>
                    <a href="{{ route('business-card.detail', 'metallic-foil-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Painted Edge Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/32pt-painted-edge-business-cards.png') }}" class="card-img-top" alt="Painted Edge Business Cards">
                <div class="card-body">
                    <h5 class="card-title">Painted Edge Business Cards</h5>
                    <p class="card-text">Print business cards with painted edges that help your clients stand out with color.</p>
                    <p class="card-text"><strong>$11.50</strong></p>
                    <a href="{{ route('business-card.detail', 'painted-edge-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Pearl Paper Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/pearl-paper-business-cards.jpg') }}" class="card-img-top" alt="Pearl Paper Business Cards">
                <div class="card-body">
                    <h5 class="card-title">Pearl Paper Business Cards</h5>
                    <p class="card-text">These cards have a metallic shimmer when viewed at different angles, making them perfect for artists, designers, and anyone who wants to stand out.</p>
                    <p class="card-text"><strong>$11.50</strong></p>
                    <a href="{{ route('business-card.detail', 'pearl-paper-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Soft Touch Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/soft-touch-business-cards.png') }}" class="card-img-top" alt="Soft Touch Business Cards">
                <div class="card-body">
                    <h5 class="card-title">Soft Touch Business Cards</h5>
                    <p class="card-text">These luxurious business cards, also known as suede business cards, have a smooth, velvety texture that leaves a lasting impression.</p>
                    <p class="card-text"><strong>$11.50</strong></p>
                    <a href="{{ route('business-card.detail', 'soft-touch-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Spot UV Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/spot-uv-business-cards-3.png') }}" class="card-img-top" alt="Spot UV Business Cards">
                <div class="card-body">
                    <h5 class="card-title">Spot UV Business Cards</h5>
                    <p class="card-text">Laminated business cards with clear gloss applied to specific areas of your choice, creating a striking contrast.</p>
                    <p class="card-text"><strong>$11.50</strong></p>
                    <a href="{{ route('business-card.detail', 'spot-uv-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
