@extends('layouts.main')

@section('content')
<div class="container product-page my-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ asset('images/all-images/14pt-matte-finish-folders.png') }}" class="img-fluid" alt="Standard Matte Folder">
        </div>

        <!-- Product Details and Order Form -->
        <div class="col-md-6">
            <h1>Standard Matte Presentation Folder</h1>
            <p>Presentation folders are best used as a means to hold documents for organization and presentations.

            </p>

            <div class="product-order-box">
                <h4>Price this item:</h4>
                <form>
                    <!-- Stock Dropdown -->
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <select id="stock" class="form-control">
                            <option value="printed 1 side">Printed 1 Side</option>
                            <option value="printed both sides">Printed Both Sides</option>
                        </select>
                    </div>

                    <!-- Size Dropdown -->
                    <div class="form-group">
                        <label for="size">Size</label>
                        <select id="size" class="form-control">
                            <option value="5.25x10.5">5.5 x 10.5</option>
                            <option value="9x12">9 x 12</option>
                            <option value="6x9">6 x 9</option>
                            <option value="9x14.5">9 x 14.5</option>
                        </select>
                    </div>

                    <!-- Quantity Dropdown -->
                    <div class="form-group">
                        <label for="qty">Quantity</label>
                        <select id="qty" class="form-control">
                            <option value="100">100</option>
                            <option value="250">250</option>
                            <option value="500">500</option>
                            <option value="1000">1000</option>
                            <option value="2500">2500</option>
                            <option value="5000">5000</option>
                        </select>
                    </div>

                    <!-- Buisness Card Slit -->
                    <div class="form-group">
                        <label for="Business Card Slit">Business Card Slit</label>
                        <select id="stock" class="form-control">
                            <option value="rone">None</option>
                            <option value="right">Right</option>
                            <option value="left">Left</option>
                            <option value="both">Both</option>
                        </select>
                    </div>

                    <!-- Pockets -->
                    <div class="form-group">
                        <label for="Pockets">Pockets</label>
                        <select id="stock" class="form-control">
                            <option value="two pockets">Two Pockets</option>
                        </select>
                    </div>

                     <!-- Turnaround -->
                     <div class="form-group">
                        <label for="turnaround">Turnaround</label>
                        <select id="stock" class="form-control">
                            <option value="4-5 Business Days">4-5 Business Days</option>
                        </select>
                    </div>

                    <!-- Price -->
                    <div class="product-price">
                        <h4>Regular Price:</h4>
                        <p>$230.00</p>
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
                    <h5>Product Details for Standard Matte Folder</h5>
                    <p><strong>Size:</strong>5.25x10.5  6x9  9x12  9x14.5</p>
                    <p><strong>Quantities</strong>Ranges from 100 to 5000</p>
                    <p><strong>Paper Type:</strong>95 Bright 14pt Gloss C2S Stock</p>
                    <p><strong>Coating:</strong>Matte Finish</p>
                    <p><strong>Printing:</strong> Full-color printing on front and back</p>
                    <p><strong>Finishing:</strong> trim, Die-cut,glue and box</p>
                </div>

                <!-- File Prep Tab -->
                <div class="tab-pane fade" id="fileprep" role="tabpanel">
                    <h5>File Prep for Standard Matte Folder</h5>
                    <p>Make sure your file meets the following specifications:</p>
                    <ul>
                        <li>Resolution: 300 DPI</li>
                        <li>Bleed: 0.125 inches on all sides</li>
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
