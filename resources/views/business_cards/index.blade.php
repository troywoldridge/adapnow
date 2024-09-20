@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h2>Standard Business Cards</h2>
        <div class="row">
            @foreach ($businessCards as $card)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/' . $card->image) }}" class="card-img-top" alt="{{ $card->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $card->name }}</h5>
                            <p class="card-text">{{ $card->description }}</p>
                            <p class="card-text"><strong>${{ $card->price }}</strong></p>
                            <a href="{{ route('business-card.detail', $card->slug) }}" class="btn btn-primary">View Details</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
