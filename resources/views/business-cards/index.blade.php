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
                            <h5 class="card-title">Durable  Business Cards</h5>
                            <p class="card-text">Through the use of a high quality substrate, this synthetic paper is perfect for customized and short run designs. Sourced from raw material, it is 100% recyclable, non-toxic, and extremely durable. The waterproof and tear resistant qualities guarantee that your business cards will always look great, even in the most adverse of conditions.</p>
                            <p class="card-text"><strong>$11.50</strong></p>
                            <a href="{{ route('business-card.detail', 'durable-business-cards') }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>


                <!-- Kraft paper Business Cards -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/all-images/kraft-paper-business-cards.jpg') }}" class="card-img-top" alt="kraft-paper Business Cards">
                        <div class="card-body">
                            <h5 class="card-title">Kraft Paper  Business Cards</h5>
                            <p class="card-text">Kraft Paper business cards will help you stand out from the competition. Most suitable for bold, dark-colored designs, the fibers of the paper will give your design a natural look. 100% recyclable and produced in a sustainable process, they are the perfect option for those who like to print on high quality paper stock, but with an environmentally friendly look and feel.</p>
                            <p class="card-text"><strong>$11.50</strong></p>
                            <a href="{{ route('business-card.detail', 'kraft-paper-business-cards') }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                 <!-- metallic foil  Business Cards -->
                 <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/all-images/metallic-foil-business-cards.png') }}" class="card-img-top" alt="metallic foil Business Cards">
                        <div class="card-body">
                            <h5 class="card-title">Metallic Foil Business Cards</h5>
                            <p class="card-text">Raised foil postcards stand out with their silver or gold custom foil printing. Our wholesale foil printing produces a premium look popular for high-end buisness-cards</p>
                            <p class="card-text"><strong>$11.50</strong></p>
                            <a href="{{ route('business-card.detail', 'metallic-foil-business-cards') }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Painted Edge Business Cards -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/all-images/32pt-painted-edge-business-cards.png') }}" class="card-img-top" alt="painted edge Business Cards">
                        <div class="card-body">
                            <h5 class="card-title">Metallic Foil Business Cards</h5>
                            <p class="card-text">Print business cards with painted edges that help your clients stand out with color.</p>
                            <p class="card-text"><strong>$11.50</strong></p>
                            <a href="{{ route('business-card.detail', 'painted-edge-business-cards') }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Pearl Paper Business Cards -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/all-images/pearl-paper-business-cards.jpg') }}" class="card-img-top" alt="pearl paper Business Cards">
                        <div class="card-body">
                            <h5 class="card-title">Metallic Foil Business Cards</h5>
                            <p class="card-text">A unique stock that shimmers when seen at different angles, Pearl Paper business cards are ingrained with pearl fibers that give the paper a smooth, metallic look. It will also help to give the lighter colors of your design a subtle shimmer. Through its artistic aesthetic, it is perfect for designers, marketers, or anyone who wants to attract attention from an appearance standpout. </p>
                            <p class="card-text"><strong>$11.50</strong></p>
                            <a href="{{ route('business-card.detail', 'pearl-paper-business-cards') }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>


            <!-- Soft Touch Business Cards -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images/all-images/soft-touch-business-cards.png') }}" class="card-img-top" alt="soft touch Business Cards">
                    <div class="card-body">
                        <h5 class="card-title">Soft Touch Business Cards</h5>
                        <p class="card-text"></p>
                        <p class="card-text">Soft touch business cards are sometimes called suede business cards for their luxurious feel.</p>
                            <strong>$11.50</strong></p>
                        <a href="{{ route('business-card.detail', 'soft-touch-business-cards') }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Spot UV Business Cards -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images/all-images/spot-uv-business-cards-3.png') }}" class="card-img-top" alt="spot uv Business Cards">
                    <div class="card-body">
                        <h5 class="card-title">Spot UV Business Cards</h5>
                        <p class="card-text"></p>
                        <p class="card-text">These luxurious laminated business cards have clear gloss applied to areas of your choice.</p>
                            <strong>$11.50</strong></p>
                        <a href="{{ route('business-card.specialty.detail', 'spot-uv-business-cards') }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>

                





        <!-- You can add more products manually in a similar way -->

    </div>
</div>
@endsection
