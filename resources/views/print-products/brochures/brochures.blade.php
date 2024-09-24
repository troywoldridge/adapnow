@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h2 class="text-center">Brochures</h2>

    <div class="row">
        <!-- Gloss Text Brochures -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/100lb-gloss-text-brochures.jpg') }}" class="img-fluid" alt="Gloss Text Brochures">
                    <h5 class="card-title">Gloss Text Brochures</h5>
                    <p class="card-text">Shiny, vibrant brochures perfect for colorful and eye-catching designs.</p>
                    <a href="{{ route('brochures.gloss-text') }}" class="category-link">View Gloss Text Brochures</a>
                </div>
            </div>
        </div>

        <!-- Matte Finish Brochures -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/100lb-matte-finish-brochures.jpg') }}" class="img-fluid" alt="Matte Finish Brochures">
                    <h5 class="card-title">Matte Finish Brochures</h5>
                    <p class="card-text">Smooth and elegant matte finish for a more professional look.</p>
                    <a href="{{ route('brochures.matte-finish') }}" class="category-link">View Matte Finish Brochures</a>
                </div>
            </div>
        </div>

        <!-- UV (High Gloss) Brochures -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/100lb-uv-high-gloss-brochures.jpg') }}" class="img-fluid" alt="UV High Gloss Brochures">
                    <h5 class="card-title">UV (High Gloss) Brochures</h5>
                    <p class="card-text">Glossy UV-coated brochures with a bright and shiny finish.</p>
                    <a href="{{ route('brochures.uv-high-gloss') }}" class="category-link">View UV (High Gloss) Brochures</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
