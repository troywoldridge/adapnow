@extends('layouts.main')

@section('content')
<div class="container product-page my-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ asset('images/all-images/14pt-aq-postcards.png') }}" class="img-fluid" alt="14pt AQ Postcards">
        </div>

        <!-- Product Details and Order Form -->
        <div class="col-md-6">
            <h1>14pt + AQ Writable Postcards</h1>
            <p>Postcards are a powerful and cost-effective marketing tool, particularly useful as a mailer. These postcards combine a glossy and shiny coated side with an uncoated, writable side.</p>

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
                            <option value="1000">1000</option>
                            <option value="1500">1500</option>
                            <option value="2000">2000</option>
                            <option value="2500">2500</option>
                            <option value="5000">5000</option>
                            <option value="10000">10000</option>
                            <option value="15000">15000</option>
                        </select>
                    </div>

                    <!-- Coating Dropdown -->
                    <div class="form-group">
                        <label for="coating">Coating</label>
                        <select id="coating" class="form-control">
                            <option value="No Coating">Gloss AQ PG 1 Only</option>
                        </select>
                    </div>

                    <!-- Scoring Dropdown -->
                    <div class="form-group">
                        <label for="scoring">Scoring</label>
                        <select id="scoring" class="form-control">
                            <option value="none">None</option>
                        </select>
                    </div>

                    <!-- Bundling Dropdown -->
                    <div class="form-group">
                        <label for="bundling">Bundling</label>
                        <select id="bundling" class="form-control">
                            <option value="No Bundling">No Bundling - Free</option>
                            <option value="Single band 25s">Single Bands 25s</option>
                            <option value="Single band 50s">Single Band 50s</option>
                            <option value="Single band 100s">Single Band 100s</option>
                            <option value="Double band 25s">Double Band 25s</option>
                            <option value="Double band 50s">Double Band 50s</option>
                            <option value="Double band 100s">Double Band 100s</option>
                            <option value="Shrink wrap 25s">Shrink Wrap 25s</option>
                            <option value="Shrink wrap 50s">Shrink Wrap 50s</option>
                        </select>
                    </div>

                    <!-- Turnaround Dropdown -->
                    <div class="form-group">
                        <label for="turnaround">Turnaround</label>
                        <select id="turnaround" class="form-control">
                            <option value="2-4 Business Days">2-4 Business Days</option>
                           
                        </select>
                    </div>

                    <!-- Price -->
                    <div class="product-price">
                        <h4>Regular Price:</h4>
                        <p>$27.00</p>
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
                    <h5>Product Details for 14pt AQ Writable Postcards</h5>
                    <p><strong>Paper Type:</strong>90 Bright 14pt C1S Stock</p>
                    <p><strong>Sizes:</strong>4x6  8.5x3.5  5x7  4x9  8.5x5.5</p>
                    <p><strong>Coating:</strong>Gloss AQ PG 1 Only</p>
                    <p><strong>Finishing:</strong> Cut to size and boxed</p>
                    <p><strong>Quantities:</strong> 100 - 15,000</p>
                </div>

                <!-- File Prep Tab -->
                <div class="tab-pane fade" id="fileprep" role="tabpanel">
                    <h5>File Prep for 14pt Writable + AQ Postcards</h5>
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