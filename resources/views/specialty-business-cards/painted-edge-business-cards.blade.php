@extends('layouts.main')

@section('content')
<div class="container product-page">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ asset('images/all-images/32pt-painted-edge-business-card-4.png') }}" class="img-fluid" alt="Painted Edge Business Cards">
        </div>

        <!-- Product Details and Order Form -->
        <div class="col-md-6">
            <h1>Painted Edge Business Cards</h1>
            <p>Print business cards with painted edges that help your clients stand out with color. These cards come on thick 32pt premium stock. Choose from 7 Edge Colors. With an uncoatd Surface that makes a powerful first impression</p>
            
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
                            <option value="3.5x2">3.5 x 2 inches</option>>
                        </select>
                    </div>

                    <!-- Quantity Dropdown -->
                    <div class="form-group">
                        <label for="qty">Quantity</label>
                        <select id="qty" class="form-control">
                            <option value="250">250</option>
                            <option value="500">500</option>
                            <option value="1000">1000</option>
                        </select>
                    </div>

                    <!-- Coating Dropdown -->
                    <div class="form-group">
                        <label for="coating">Paint Color</label>
                        <select id="coating" class="form-control">
                            <option value="matte">White</option>
                            <option value="matte">Black</option>
                            <option value="matte">Red</option>
                            <option value="matte">Light Blue</option>
                            <option value="matte">Yellow</option>
                            <option value="matte">Gold</option>
                            <option value="matte">Silver</option>
                        </select>
                    </div>

                    <!-- Sets Dropdown -->
                    <div class="form-group">
                        <label for="sets">Sets</label>
                        <select id="sets" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>

                    <!-- Price -->
                    <div class="product-price">
                        <h4>Regular Price:</h4>
                        <p>$55.75</p> <!-- Adjust the price for the specialty card -->
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
                    <h5>Product Details for Painted Edge Business Cards</h5>
                    <p><strong>Paper Type:</strong> 18pt Kraft Board</p>
                    <p><strong>Sizes:</strong> 3.5" x 2"</p>
                    <p><strong>Paint Color:</strong>White, Red, Black, Light Blue, Yellow, Gold and Silver</p>
                    <p><strong>Finishing:</strong> Boxed</p>
                    <p><strong>Quantities:</strong> 250 - 1000</p>
                </div>

                <!-- File Prep Tab -->
                <div class="tab-pane fade" id="fileprep" role="tabpanel">
                    <h5>Metallic Foil Business Cards</h5>
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
                    <p>★★★★★ "Nice material, nice job!"</p>
                    <p>★★★★ "Great!"</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
