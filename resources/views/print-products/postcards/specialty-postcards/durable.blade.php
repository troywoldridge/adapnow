@extends('layouts.main')

@section('content')
<div class="container product-page my-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ asset('images/all-images/durable-postcards.png') }}" class="img-fluid" alt="Spot UV Postcards">
        </div>

        <!-- Product Details and Order Form -->
        <div class="col-md-6">
            <h1>Durable Postcards</h1>
            <p>Waterproof postcards made from this premium synthetic paper retain ink rain or shine. Non-toxic, tear-resistant and 100% recyclable, these durable postcards are sure to differentiate you from your competitors.</p>

            <div class="product-order-box">
                <h4>Price this item:</h4>
                <form>
                    <!-- Stock Dropdown -->
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <select id="stock" class="form-control">
                            <option value="single">Single Side Printing (4/0)</option>
                            <option value="double">Double Sided Printing (4/4)</option>
                        </select>
                    </div>

                    <!-- Size Dropdown -->
                    <div class="form-group">
                        <label for="size">Size</label>
                        <select id="size" class="form-control">
                        <option value="4x6">4 x 6</option>
                        <option value="8.5x3.5">8.5 x 3.5</option>
                        <option value="5x7">5 x 7</option>
                        <option value="4x9">4 x 9</option>
                        <option value="8.5x5.5">8.5 x 5.5</option>
                        <option value="8.5x11">8.5 x 11</option>
                        </select>
                    </div>

                    <!-- Quantity Dropdown -->
                    <div class="form-group">
                        <label for="qty">Quantity</label>
                        <select id="qty" class="form-control">
                            <option value="100">100</option>
                            <option value="250">250</option>
                            <option value="500">500</option>
                            <option value="750">750</option>
                            <option Value="1000">1000</option>
                        </select>
                    </div>

                    <!-- Coating Dropdown -->
                    <div class="form-group">
                        <label for="coating">Coating</label>
                        <select id="coating" class="form-control">
                            <option value="No Coating">No Coating</option>
                        </select>
                    </div>

                    <!-- Scoring Dropdown -->
                    <div class="form-group">
                        <label for="scoring">Scoring</label>
                        <select id="scoring" class="form-control">
                            <option value="none">None</option>
                        </select>
                    </div>

                   

                    <!-- Turnaround Dropdown -->
                    <div class="form-group">
                        <label for="turnaround">Turnaround</label>
                        <select id="turnaround" class="form-control">
                            <option value="4-5 Business Days">4-5 Business Days</option>
                           
                        </select>
                    </div>

                    <!-- Price -->
                    <div class="product-price">
                        <h4>Regular Price:</h4>
                        <p>$70.00</p>
                    </div>

                    <!-- Add to Cart Button -->
                    <button type="button" class="btn btn-primary">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Tabs for Details, File Prep, and Reviews -->
    <div class="row mt-5">
        <div class="col-md-12">
            <ul class="nav nav-tabs" id="productTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="details-tab" data-toggle="tab" href="#details" role="tab">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fileprep-tab" data-toggle="tab" href="#fileprep" role="tab">File Prep</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab">Reviews</a>
                </li>
            </ul>

            <div class="tab-content" id="productTabContent">
                <!-- Details Tab -->
                <div class="tab-pane fade show active" id="details" role="tabpanel">
                    <h5>Product Details for Durable Postcards</h5>
                    <p><strong>Paper Type:</strong>16pt Synthetic</p>
                    <p><strong>Sizes:</strong>4x6  8.5x3.5  5x7  8.5x5.5  8.5 x 11</p>
                    <p><strong>Coating:</strong>No Coating</p>
                    <p><strong>Finishing:</strong> Cut to size and boxed</p>
                    <p><strong>Quantities:</strong> 100 - 1000</p>
                </div>

                <!-- File Prep Tab -->
                <div class="tab-pane fade" id="fileprep" role="tabpanel">
                    <h5>File Prep for Durable Postcards</h5>
                    <p>Make sure your file meets the following specifications:</p>
                    <ul>
                        <li>Resolution: 300 DPI</li>
                        <li>Bleed: 1/16 inch on all sides</li>
                        <li>Color Mode: CMYK</li>
                        <li>File Type: PDF format with bleeds</li>
                    </ul>
                </div>

                <!-- Reviews Tab -->
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                    <h5>Customer Reviews</h5>
                    <p>★★★★★ "Great quality and quick turnaround!"</p>
                    <p>★★★★ "Very happy with the product."</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection