@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h2 class="text-center">Standard Business Cards</h2>

    <div class="row">
        <!-- Manually adding business cards -->
        
        <!-- 14pt Matte Finish Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/14pt-matte-business-cards.png') }}" class="card-img-top" alt="14pt Matte Finish Business Cards">
                <div class="card-body">
                    <h5 class="card-title">14pt Matte Finish Business Cards</h5>
                    <p class="card-text">Our 14pt matte finish business cards offer a smooth, elegant look.</p>
                    <p class="card-text"><strong>$10.50</strong></p>
                    <a href="{{ route('business-card.detail', '14pt-matte-finish-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- 13pt Enviro Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/13pt-enviro-business-cards.png') }}" class="card-img-top" alt="13pt Enviro Business Cards">
                <div class="card-body">
                    <h5 class="card-title">13pt Enviro Business Cards</h5>
                    <p class="card-text">These business cards contain 30% post-consumer recycled material, making them a more environmentally friendly option.</p>
                    <p class="card-text"><strong>$10.50</strong></p>
                    <a href="{{ route('business-card.detail', '13pt-enviro-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Best Value Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/14pt-writable-aq-business-cards.png') }}" class="card-img-top" alt="Best Value Business Cards">
                <div class="card-body">
                    <h5 class="card-title">Best Value Business Cards</h5>
                    <p class="card-text">Our best value business cards offer excellent quality at a lower price.</p>
                    <p class="card-text"><strong>$7.50</strong></p>
                    <a href="{{ route('business-card.detail', 'best-value-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- 16pt Matte Finish Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/16pt-matte-business-cards.png') }}" class="card-img-top" alt="16pt Matte Finish Business Cards">
                <div class="card-body">
                    <h5 class="card-title">16pt Matte Finish Business Cards</h5>
                    <p class="card-text">Our 16pt matte finish business cards are a good option for those seeking thicker stock.</p>
                    <p class="card-text"><strong>$10.50</strong></p>
                    <a href="{{ route('business-card.detail', '16pt-matte-finish-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- 14pt UV Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/18pt-gloss-lamination-business-cards.png') }}" class="card-img-top" alt="14pt UV High Gloss Business Cards">
                <div class="card-body">
                    <h5 class="card-title">14pt UV Business Cards</h5>
                    <p class="card-text">Our 14pt business cards with UV coating have a very glossy and shiny look.</p>
                    <p class="card-text"><strong>$9.50</strong></p>
                    <a href="{{ route('business-card.detail', '14pt-uv-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- 16pt UV Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/18pt-gloss-lamination-business-cards.png') }}" class="card-img-top" alt="14pt UV High Gloss Business Cards">
                <div class="card-body">
                    <h5 class="card-title">16pt UV Business Cards</h5>
                    <p class="card-text">Our 16pt business cards with UV coating have a very glossy and shiny look.</p>
                    <p class="card-text"><strong>$9.50</strong></p>
                    <a href="{{ route('business-card.detail', '16pt-uv-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- 18pt Gloss Lam Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/16pt-aq-business-cards.png') }}" class="card-img-top" alt="14pt UV High Gloss Business Cards">
                <div class="card-body">
                    <h5 class="card-title">18pt Gloss Laminated Business Cards</h5>
                    <p class="card-text">These business cards have a glossy and shiny lamination which also offers better durability.</p>
                    <p class="card-text"><strong>$9.50</strong></p>
                    <a href="{{ route('business-card.detail', '18pt-gloss-lam-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- 18pt matte silk Lam Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/16pt-aq-business-cards.png') }}" class="card-img-top" alt="18pt  matte silk Gloss Business Cards">
                <div class="card-body">
                    <h5 class="card-title">18pt Matte Silk Laminated Business Cards</h5>
                    <p class="card-text">These business cards have a silky lamination which also offers better durability.</p>
                    <p class="card-text"><strong>$9.50</strong></p>
                    <a href="{{ route('business-card.detail', '18pt-matte-silk-lam-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- 14pt aq Business Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/writable-business-cards-main.png') }}" class="card-img-top" alt="14pt aq Business Cards">
                <div class="card-body">
                    <h5 class="card-title">14pt AQ Business Cards</h5>
                    <p class="card-text">Our 14pt Business cards with AQ have a semi-gloss look and are the most commonly ordered.</p>
                    <p class="card-text"><strong>$11.50</strong></p>
                    <a href="{{ route('business-card.detail', '14pt-aq-business-cards') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>


                <!-- 16pt aq Business Cards -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/all-images/writable-business-cards-main.png') }}" class="card-img-top" alt="16pt aq Business Cards">
                        <div class="card-body">
                            <h5 class="card-title">16pt AQ Business Cards</h5>
                            <p class="card-text">Our 16pt Business cards with AQ have a semi-gloss look and are on a thicker stock.</p>
                            <p class="card-text"><strong>$11.50</strong></p>
                            <a href="{{ route('business-card.detail', '16pt-aq-business-cards') }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                 <!-- 13pt Linen Business Cards -->
                 <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/all-images/13pt-linnen-business-cards.png') }}" class="card-img-top" alt="13pt linen Business Cards">
                        <div class="card-body">
                            <h5 class="card-title">13pt Linen Business Cards</h5>
                            <p class="card-text">Linen business cards offer a premium look and a distinctive feel that stand out </p>
                            <p class="card-text"><strong>$11.50</strong></p>
                            <a href="{{ route('business-card.detail', '13pt-linen-business-cards') }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
        
        <!-- You can add more products manually in a similar way -->

    </div>
</div>
@endsection
