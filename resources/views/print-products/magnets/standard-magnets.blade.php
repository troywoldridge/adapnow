@extends('layouts.main')

@section('content')
<div class="container product-page my-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ asset('images/all-images/14pt-magnets.jpg') }}" class="img-fluid" alt="Standard Magnets">
        </div>

        <!-- Product Details and Order Form -->
        <div class="col-md-6">
            <h1>Standard Magnets</h1>
            <p>Printed magnets are a unique and practical way for your customers to grab the attention of their clients.</p>

            <div class="product-order-box">
                <h4>Price this item:</h4>
                <form>
                    <!-- Stock Dropdown -->
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <select id="stock" class="form-control">
                            <option value="single">Single Side Printing (4/0)</option>
                        </select>
                    </div>

                    <!-- Size Dropdown -->
                    <div class="form-group">
                        <label for="size">Size</label>
                        <select id="size" class="form-control">
                            <option value="3.5x2">3.5 x 2</option>
                            <option value="2.5x2.5">255 x 2.5</option>
                            <option value="4.25x2.75">4.25 x 2.75</option>
                            <option value="2x3.5">2 x 3.5</option>
                            <option value="4x3">4 x 3</option>
                            <option value="4x6">4 x 6</option>
                            <option value="4.25x6">4.25 x 6</option>
                            <option value="4x7">4 x 7</option>
                            <option value="4x8">4 x 8</option>
                            <option value="5x7">5 x 7</option>
                            <option value="4x11">4 x 11</option>
                            <option value="5.5x8.5">5.5 x 8.5</option>
                        </select>
                    </div>

                    <!-- Quantity Dropdown -->
                    <div class="form-group">
                        <label for="qty">Quantity</label>
                        <select id="qty" class="form-control">
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                            <option value="250">250</option>
                            <option value="500">500</option>
                            <option value="750">750</option>
                            <option value="1000">1000</option>
                            <option value="1500">1500</option>
                            <option value="2000">2000</option>
                            <option value="2500">2500</option>
                            <option value="5000">5000</option>
                        </select>
                    </div>

                    <!-- Coating Dropdown -->
                    <div class="form-group">
                        <label for="coating">Coating</label>
                        <select id="coating" class="form-control">
                            <option value="No-Coating">No Coating</option>
                        </select>
                    </div>

                    <!-- Turnaround Dropdown -->
                    <div class="form-group">
                        <label for="turnaround">Turnaround</label>
                        <select id="turnaround" class="form-control">
                            <option value="2-3 Business Days">2-3 Business Days</option>
                        </select>
                    </div>

                    <!-- Price -->
                    <div class="product-price">
                        <h4>Regular Price:</h4>
                        <p>$26.00</p>
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
                    <h5>Product Details for Standard Magnets</h5>
                    <p><strong>Paper Type:</strong> 14pt Magnet Stock</p>
                    <p><strong>Sizes:</strong> 2x3.5  4x3  4x6  4.25x6  4x7  4x8  5x7  4x11  5.5x8.5</p>
                    <p><strong>Coating:</strong> No Coating</p>
                    <p><strong>Finishing:</strong>Trim  and boxed</p>
                    <p><strong>Quantities:</strong> 25 - 5000</p>
                </div>

                <!-- File Prep Tab -->
                <div class="tab-pane fade" id="fileprep" role="tabpanel">
                    <h5>File Prep For Standard Magnets</h5>
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
