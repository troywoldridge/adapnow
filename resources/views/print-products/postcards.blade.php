@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h2 class="text-center">Postcards</h2>

    <div class="row">
        <!-- Matte Finish Postcards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/10pt-matte-finish-postcards.png') }}" class="img-fluid" alt="14pt Matte Finish Postcards">
                    <h5 class="card-title">Matte Finish Postcards</h5>
                    <p class="card-text">Our matte finish postcards offer a smooth and elegant look, ideal for professional marketing.</p>
                    <ul>
                        <li><a href="{{ route('postcards.matte.10pt') }}">10pt Matte Finish</a></li>
                        <li><a href="{{ route('postcards.matte.14pt') }}">14pt Matte Finish</a></li>
                        <li><a href="{{ route('postcards.matte.16pt') }}">16pt Matte Finish</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- UV (High Gloss) Postcards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/14pt-uv-postcards.png') }}" class="img-fluid" alt="14pt UV  Postcards">
                    <h5 class="card-title">UV (High Gloss) Postcards</h5>
                    <p class="card-text">Glossy UV-coated postcards offer a vibrant and shiny finish, making them perfect for eye-catching designs.</p>
                    <ul>
                        <li><a href="{{ route('postcards.uv.14pt') }}">14pt UV</a></li>
                        <li><a href="{{ route('postcards.uv.16pt') }}">16pt UV</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Lamination Postcards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/18pt-gloss-lamination-postcards.png') }}" class="img-fluid" alt="14pt UV  Postcards">
                    <h5 class="card-title">Lamination Postcards</h5>
                    <p class="card-text">Laminated postcards are durable and perfect for lasting impressions.</p>
                    <ul>
                        <li><a href="{{ route('postcards.lamination.gloss') }}">18pt Gloss Lamination</a></li>
                        <li><a href="{{ route('postcards.lamination.matte-silk') }}">18pt Matte / Silk Lamination</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- AQ Postcards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                       <img src="{{ asset('images/all-images/10pt-aq-postcards.png') }}" class="img-fluid" alt="18pt gloss lamination Postcards"
                    <h5 class="card-title">AQ Postcards</h5>
                    <p class="card-text">AQ-coated postcards have a semi-gloss finish that provides a professional look at a great price.</p>
                    <ul>
                        <li><a href="{{ route('postcards.aq.10pt') }}">10pt AQ</a></li>
                        <li><a href="{{ route('postcards.aq.14pt') }}">14pt AQ</a></li>
                        <li><a href="{{ route('postcards.aq.16pt') }}">16pt AQ</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Writable Postcards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/13pt-linnen-business-cards.png') }}" class="img-fluid" alt="18pt gloss lamination Postcards">
                    <h5 class="card-title">Writable Postcards</h5>
                    <p class="card-text">Writable postcards are perfect for personalized messaging and come in various materials.</p>
                    <ul>
                        <li><a href="{{ route('postcards.writable.enviro') }}">13pt Enviro Uncoated</a></li>
                        <li><a href="{{ route('postcards.writable.linen') }}">13pt Linen Uncoated</a></li>
                        <li><a href="{{ route('postcards.writable.aq') }}">14pt Writable + AQ</a></li>
                        <li><a href="{{ route('postcards.writable.uv') }}">14pt Writable + UV</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Specialty Postcards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/kraft-paper-postcards.png') }}" class="img-fluid" alt="18pt gloss lamination Postcards">
                    <h5 class="card-title">Specialty Postcards</h5>
                    <p class="card-text">Our specialty postcards come in a variety of premium finishes and textures to make your brand stand out.</p>
                    <ul>
                        <li><a href="{{ route('postcards.specialty.metallic-foil') }}">Metallic Foil</a></li>
                        <li><a href="{{ route('postcards.specialty.spot-uv') }}">Spot UV</a></li>
                        <li><a href="{{ route('postcards.specialty.kraft-paper') }}">Kraft Paper</a></li>
                        <li><a href="{{ route('postcards.specialty.pearl-paper') }}">Pearl Paper</a></li>
                        <li><a href="{{ route('postcards.specialty.durable') }}">Durable</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
