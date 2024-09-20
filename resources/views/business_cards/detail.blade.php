@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h2>{{ $businessCard->name }}</h2>
        <div class="row">
            <div class="col-md-8">
                <img src="{{ asset('images/' . $businessCard->image) }}" class="img-fluid" alt="{{ $businessCard->name }}">
                <p>{{ $businessCard->description }}</p>
            </div>
            <div class="col-md-4">
                <h4>Price: ${{ $businessCard->price }}</h4>

                <!-- Stock Dropdown -->
                <div class="form-group">
                    <label for="stock">Stock:</label>
                    <select class="form-control" id="stock" name="stock">
                        @foreach($stocks as $stock)
                            <option value="{{ $stock->id }}">{{ $stock->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Size Dropdown -->
                <div class="form-group">
                    <label for="size">Size:</label>
                    <select class="form-control" id="size" name="size">
                        @foreach($sizes as $size)
                            <option value="{{ $size->id }}">{{ $size->name }}</option>
                        @endforeach
                    </select>
                </div>

               

                <!-- Quantity Dropdown -->
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <select class="form-control" id="quantity" name="quantity">
                        @foreach($quantities as $quantity)
                            <option value="{{ $quantity->id }}">{{ $quantity->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Add to Cart Button -->
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>

        <!-- Product Details Tabs -->
        <div class="mt-4">
            <ul class="nav nav-tabs" id="productTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="true">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="file-prep-tab" data-toggle="tab" href="#file-prep" role="tab" aria-controls="file-prep" aria-selected="false">File Prep</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                </li>
            </ul>

            <div class="tab-content" id="productTabsContent">
                <!-- Details Tab -->
                <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
                    <p>{{ $businessCard->description }}</p>
                </div>

                <!-- File Prep Tab -->
                <div class="tab-pane fade" id="file-prep" role="tabpanel" aria-labelledby="file-prep-tab">
                    <p>Instructions for preparing files for print go here.</p>
                </div>

                <!-- Reviews Tab -->
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <p>Customer reviews go here.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
