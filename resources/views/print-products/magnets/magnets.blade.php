@extends('layouts.main')

@section('content')
<div class="container product-page my-5">
    <h2 class="text-center">Magnets</h2>
    <div class="row">
        <!-- Standard Magnets -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/magnets-main.png') }}" class="card-img-top" alt="Standard Magnets">
                <div class="card-body">
                    <h5 class="card-title">Standard Magnets</h5>
                    <p class="card-text">High-quality standard magnets perfect for a variety of promotional and personal uses.</p>
                    <a href="{{ route('magnets.standard') }}" class="category-link">View Standard Magnets</a>
                </div>
            </div>
        </div>

        <!-- Cut to Shape Magnets -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('images/all-images/30mil-cut-to-shape-magnets.png') }}" class="card-img-top" alt="Cut to Shape Magnets">
                <div class="card-body">
                    <h5 class="card-title">Cut to Shape Magnets</h5>
                    <p class="card-text">Custom cut-to-shape magnets for personalized branding and promotional needs.</p>
                    <a href="{{ route('magnets.cut-to-shape') }}" class="category-link">View Cut to Shape Magnets</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
