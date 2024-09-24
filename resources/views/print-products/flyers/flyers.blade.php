@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h2 class="text-center">Flyers</h2>

    <div class="row">
        <!-- Gloss Text Flyers -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/gloss-text-flyers-main.jpg') }}" class="img-fluid" alt="Gloss Text Flyers">
                    <h5 class="card-title">Gloss Text Flyers</h5>
                    <p class="card-text">Our gloss text flyers are perfect for vibrant, high-quality color printing.</p>
                    <a href="{{ route('flyers.gloss-text') }}" class="category-link">View Details</a>
                </div>
            </div>
        </div>

        <!-- Matte Finish Flyers -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/flyers-main.png') }}" class="img-fluid" alt="Matte Finish Flyers">
                    <h5 class="card-title">Matte Finish Flyers</h5>
                    <p class="card-text">Matte finish flyers provide a smooth, non-glossy look for a professional feel.</p>
                    <a href="{{ route('flyers.matte-finish') }}" class="category-link">View Details</a>
                </div>
            </div>
        </div>

        <!-- UV (High Gloss) Flyers -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/uv-flyers-main.jpg') }}" class="img-fluid" alt="UV High Gloss Flyers">
                    <h5 class="card-title">UV (High Gloss) Flyers</h5>
                    <p class="card-text">These flyers offer a super glossy finish for vibrant and eye-catching designs.</p>
                    <a href="{{ route('flyers.uv') }}" class="category-link">View Details</a>
                </div>
            </div>
        </div>

        <!-- Enviro Uncoated Flyers -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/enviro-uncoated-flyers-main.jpg') }}" class="img-fluid" alt="Enviro Uncoated Flyers">
                    <h5 class="card-title">Enviro Uncoated Flyers</h5>
                    <p class="card-text">Environmentally-friendly, uncoated flyers for a more natural, textured look.</p>
                    <a href="{{ route('flyers.enviro') }}" class="category-link">View Details</a>
                </div>
            </div>
        </div>

        <!-- Linen Uncoated Flyers -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/linnen-uncoated-flyers-main.jpg') }}" class="img-fluid" alt="Linen Uncoated Flyers">
                    <h5 class="card-title">Linen Uncoated Flyers</h5>
                    <p class="card-text">Linen uncoated flyers add a premium texture for an upscale, sophisticated feel.</p>
                    <a href="{{ route('flyers.linen') }}" class="category-link">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
