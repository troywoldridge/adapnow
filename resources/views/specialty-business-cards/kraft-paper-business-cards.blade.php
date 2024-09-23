@extends('layouts.main')

@section('content')
<div class="container product-page">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ asset('images/all-images/kraft-paper-business-cards.jpg') }}" class="img-fluid" alt="Kraft Paper Business Cards">
        </div>

        <!-- Product Details and Order Form -->
        <div class="col-md-6">
            <h1>Kraft Paper Business Cards</h1>
            <p>Kraft Paper business cards will help you stand out from the competition. Most suitable for bold, dark-colored designs, the fibers of the paper will give your design a natural look. 100% recyclable and produced in a sustainable process, they are the perfect option for those who like to print on high quality paper stock, but with an environmentally friendly look and feel.
                Please note we do not print white inks on kraft stock (only CMYK inks will be printed). Not recommended for full color photos/images as they will become darker due to the darker color of the paper. This is better suited for high contrast designs with fewer colors.</p>
            
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
                            <option value="100">100</option>
                            <option value="250">250</option>
                            <option value="500">500</option>
                            <option value="1000">1000</option>
                            <option value="5000">5000</option>
                        </select>
                    </div>

                    <!-- Coating Dropdown -->
                    <div class="form-group">
                        <label for="coating">Coating</label>
                        <select id="coating" class="form-control">
                            <option value="matte">No Coating</option>
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
                        <p>$14.50</p> <!-- Adjust the price for the specialty card -->
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
                    <h5>Product Details for Kraft Paper Business Cards</h5>
                    <p><strong>Paper Type:</strong> 18pt Kraft Board</p>
                    <p><strong>Sizes:</strong> 3.5" x 2"</p>
                    <p><strong>Coating:</strong>No Coating</p>
                    <p><strong>Finishing:</strong> Boxed</p>
                    <p><strong>Quantities:</strong> 100 - 5000</p>
                </div>

                <!-- File Prep Tab -->
                <div class="tab-pane fade" id="fileprep" role="tabpanel">
                    <h5>Kraft Paper Business Cards</h5>
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
