@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h2 class="text-center">Flyers</h2>

    <div class="row">
        <!-- Gloss Text Flyers -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gloss Text Flyers</h5>
                    <p class="card-text">Our gloss text flyers are perfect for vibrant, high-quality color printing.</p>
                    <a href="{{ route('flyers.gloss-text') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Matte Finish Flyers -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Matte Finish Flyers</h5>
                    <p class="card-text">Matte finish flyers provide a smooth, non-glossy look for a professional feel.</p>
                    <a href="{{ route('flyers.matte-finish') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- UV (High Gloss) Flyers -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">UV (High Gloss) Flyers</h5>
                    <p class="card-text">These flyers offer a super glossy finish for vibrant and eye-catching designs.</p>
                    <a href="{{ route('flyers.uv') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Enviro Uncoated Flyers -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Enviro Uncoated Flyers</h5>
                    <p class="card-text">Environmentally-friendly, uncoated flyers for a more natural, textured look.</p>
                    <a href="{{ route('flyers.enviro') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Linen Uncoated Flyers -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Linen Uncoated Flyers</h5>
                    <p class="card-text">Linen uncoated flyers add a premium texture for an upscale, sophisticated feel.</p>
                    <a href="{{ route('flyers.linen') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
